 I = imread('weine.jpg');
>> imshow(I);
>> J = rgb2gray(I);
>> imshow(J);
>> level = graythresh(J);
 imgbw = im2bw(J,level);
 imshow(imgbw);