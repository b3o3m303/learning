clc;clear;
  
   %����JPEG�G�׶q�ƪ�
 Q =[16 11 10 16  24  40  51  61
     12 12 14 19  26  58  60  55
     14 13 16 24  40  57  69  56
     14 17 22 29  51  87  80  62
     18 22 37 56  68 109 103  77
     24 35 55 64  81 104 113  92
     49 64 78 87 103 121 120 101
     72 92 95 98 112 100 103 99];

 X = 8;%��?�j�p

 I=imread('test.jpg');%?��?��
 gray_img = rgb2gray(I);%�ǫפ�


 I_DCT = blkproc(gray_img,[X X],'dct2');%??��?��DCT??,

 Iq = round(blkproc(I_DCT,[X X],'x./P1',Q));%�q��?�z

 Iq = Iq + 120;%�q��?�z���Z�A�ǦC��symbol��-120��+120��?�A?�F��K??�A?�䥭����0-255��??

 %���Ұ�??
 [M,N] = size(Iq);
 I1 = Iq(:);
 P = zeros(1,256);
 for i = 0:255
     P(i+1) = length(find(I1 == i))/(M*N);
 end
 k = 0:255;
 dict = huffmandict(k,P); %�ͦ��r��
 enco = huffmanenco(I1,dict); %??
 %bitstream??

         %?��???�סA?��??�v
         binaryComp = de2bi(enco);
         encodedLen = numel(binaryComp);
         imgLen = numel(de2bi(I1));
         disp(strcat(['�s�X��ǿ骺��S�y���׬�' num2str(encodedLen)]))
         
         disp(strcat(['��ϤG�i��s���S����' num2str(imgLen)]))
         disp(strcat(['���Y�v��' num2str(100*(imgLen-encodedLen)/imgLen) '%']))

 %bitstream����
 %���ҰҸ�?
 deco = huffmandeco(enco,dict);
 Idq = col2im(deco,[M,N],[M,N],'distinct')-120; %��V�q���s??��?��?�A?�o�n��?�������^�h��?��??�F


 I_rq =  round(blkproc(Idq,[X X],'x.*P1',Q));%�϶q��

 I_rDCT = round(blkproc(I_rq,[X X],'idct2'));

 I_rDCT = Normalize(I_rDCT);
 
 saveas(gcf,'test2','jpg');
 
 figure
 subplot(1,2,1)
 imshow(gray_img);
 title('���')


 subplot(1,2,2)

 imshow(I_rDCT/255);

 title('�g���Y�ǿ��������v��')
 


function OutImg = Normalize(InImg)
     ymax=255;ymin=0;
     xmax = max(max(InImg));
     xmin = min(min(InImg)); 
     OutImg = round((ymax-ymin)*(InImg-xmin)/(xmax-xmin) + ymin); 
     end