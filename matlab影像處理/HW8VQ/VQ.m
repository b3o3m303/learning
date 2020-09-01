clc;clear;
  
   %采用JPEG亮度量化表
 Q =[16 11 10 16  24  40  51  61
     12 12 14 19  26  58  60  55
     14 13 16 24  40  57  69  56
     14 17 22 29  51  87  80  62
     18 22 37 56  68 109 103  77
     24 35 55 64  81 104 113  92
     49 64 78 87 103 121 120 101
     72 92 95 98 112 100 103 99];

 X = 8;%分?大小

 I=imread('test.jpg');%?取?像
 gray_img = rgb2gray(I);%灰度化


 I_DCT = blkproc(gray_img,[X X],'dct2');%??像?行DCT??,

 Iq = round(blkproc(I_DCT,[X X],'x./P1',Q));%量化?理

 Iq = Iq + 120;%量化?理之后，序列的symbol取-120到+120之?，?了方便??，?其平移到0-255的??

 %哈夫曼??
 [M,N] = size(Iq);
 I1 = Iq(:);
 P = zeros(1,256);
 for i = 0:255
     P(i+1) = length(find(I1 == i))/(M*N);
 end
 k = 0:255;
 dict = huffmandict(k,P); %生成字典
 enco = huffmanenco(I1,dict); %??
 %bitstream??

         %?算???度，?算??率
         binaryComp = de2bi(enco);
         encodedLen = numel(binaryComp);
         imgLen = numel(de2bi(I1));
         disp(strcat(['編碼後傳輸的比特流長度為' num2str(encodedLen)]))
         
         disp(strcat(['原圖二進位編制比特長度' num2str(imgLen)]))
         disp(strcat(['壓縮率為' num2str(100*(imgLen-encodedLen)/imgLen) '%']))

 %bitstream接收
 %哈夫曼解?
 deco = huffmandeco(enco,dict);
 Idq = col2im(deco,[M,N],[M,N],'distinct')-120; %把向量重新??成?像?，?得要把?像平移回去原?的??；


 I_rq =  round(blkproc(Idq,[X X],'x.*P1',Q));%反量化

 I_rDCT = round(blkproc(I_rq,[X X],'idct2'));

 I_rDCT = Normalize(I_rDCT);
 
 saveas(gcf,'test2','jpg');
 
 figure
 subplot(1,2,1)
 imshow(gray_img);
 title('原圖')


 subplot(1,2,2)

 imshow(I_rDCT/255);

 title('經壓縮傳輸後解壓的影像')
 


function OutImg = Normalize(InImg)
     ymax=255;ymin=0;
     xmax = max(max(InImg));
     xmin = min(min(InImg)); 
     OutImg = round((ymax-ymin)*(InImg-xmin)/(xmax-xmin) + ymin); 
     end