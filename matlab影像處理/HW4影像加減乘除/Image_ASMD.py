import cv2
import numpy as np

image1 = cv2.imread("./weine.jpg")
image2 = cv2.imread("./FotoJet.jpg")

M = np.ones(image1.shape,dtype="uint8")*50 
added = cv2.add(image1,image2)             # 將圖像image與M相減
subtracted = cv2.subtract(image1,image2)   # 將圖像image與M相減
multiplied = cv2.multiply(image1,image2) 
divided = cv2.divide(image1,image2) 
cv2.imshow("weine",image1)     #示原圖
cv2.imshow("tiger",image2)     #示原圖
cv2.imshow("add",added)            # 加運算圖  
cv2.imshow("sub",subtracted)  # 減運算圖 
cv2.imshow("mul",multiplied)#*
cv2.imshow("div",divided)#/

cv2.waitKey(0)
cv2.destroyAllWindows()

