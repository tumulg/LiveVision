import mss
import pyautogui
import cv2 as cv
import numpy as np
import time
import multiprocessing

class ScreenCaptureAgent:
    def __init__(self) -> None:
        self.img = None
        self.img_health = None
        self.img_health_HSV = None
        self.capture_process = None
        self.fps = None
        self.enable_cv_preview = True

        self.top_left = (177, 1008)
        self.bottom_right = (413, 1019)

        self.w, self.h  = pyautogui.size()
        print("Screen Resolution: " + "w: " + str(self.w) + " h: " + str(self.h))

        self.monitor = {'top': 0, 'left': 0, 'width': self.w, 'height': self.h} #informing mss what portion of the screen to be captured

    def capture_screen(self):
        fps_report_time = time.time() #to calculate fps
        fps_report_delay = 2
        n_frames = 1
        with mss.mss() as sct:
            while True: 
                self.img = sct.grab(monitor=self.monitor)
                self.img = np.array(self.img)

                self.img_health = self.img[
                    self.top_left[1]:self.bottom_right[1],
                    self.top_left[0]:self.bottom_right[0]
                ]

                self.img_health_HSV = cv.cvtColor(self.img_health, cv.COLOR_BGR2HSV)

                if self.enable_cv_preview:
                    small = cv.resize(self.img, (0,0), fx=0.5, fy=0.5)

                    cv.imshow("Computer Vision", small)
                    cv.imshow("HealthBar", self.img_health)
                    key = cv.waitKey(1)

                elapsed_time = time.time() - fps_report_time
                if elapsed_time >= fps_report_delay:
                    self.fps = n_frames/elapsed_time
                    print("FPS: " + str(self.fps)) 
                    print("health percentage: "+ str(white_match_pct(self.img_health_HSV))) #convert to json
                    n_frames = 0
                    fps_report_time = time.time()
                n_frames += 1

def white_match_pct(img): #percentage of white color
    match_pixels = 0
    no_match_pixels = 0
    for pixel in img:
        for h, s, v in pixel:
            if s <= 20 and v >= 245: #threshold values for white color in HSV color space
                match_pixels += 1
            else:
                no_match_pixels += 1
    total_pixels = match_pixels + no_match_pixels
    return np.round(match_pixels / total_pixels, 2) * 100

def print_menu():
    print("Command Menu:")
    print(f'\tr - run\t Start Screen Capture')
    print(f'\ts - stop\t Stop Screen Capture')
    print(f'\tq - quit\t Quit Screen Capture')
if __name__ == "__main__":

    screen_agent = ScreenCaptureAgent()

    while True:
        print_menu()
        user_input = input().strip().lower()
        if user_input == 'quit' or user_input == 'q':
            if screen_agent.capture_process is not None:
                screen_agent.capture_process.terminate()
            break
        elif user_input == 'run' or user_input == 'r':
            if screen_agent.capture_process is not None:
                print(f'Warning: Process is already running.')
                continue
            screen_agent.capture_process = multiprocessing.Process(
                target=screen_agent.capture_screen,
                args=(),
                name="Screen Capture Process"
            )
            screen_agent.capture_process.start()
        elif user_input == 'stop' or user_input == 's':
            if screen_agent.capture_process is None:
                print(f'Warning: Process is not running.')
                continue
            screen_agent.capture_process.terminate()
            screen_agent.capture_process = None
        else:
            print(f'Error: Invalid Selection.')