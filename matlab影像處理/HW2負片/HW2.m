clear all; clc;
    filepath=['下載.jpg']; 
    c=imread(filepath,'jpg');
    br=rgb2gray(c);
     for(i=1:1:184)
            for(j=1:1:274)     
                br(i,j)=257 - c(i,j);%��257�� 
            end
     end
    figure(1),imshow(c);  
    figure(2),imshow(br); 