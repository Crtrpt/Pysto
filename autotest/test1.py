from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import unittest


class TestDemo(unittest.TestCase):
    def test(self):
        driver = webdriver.Chrome()
        driver.get("http://www.baidu.com")

if __name__=='__main__':
    unittest.main()