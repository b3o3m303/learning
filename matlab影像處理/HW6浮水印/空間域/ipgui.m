function varargout = ipgui(varargin)
gui_Singleton = 1;
gui_State = struct('gui_Name',       mfilename, ...
                   'gui_Singleton',  gui_Singleton, ...
                   'gui_OpeningFcn', @ipgui_OpeningFcn, ...
                   'gui_OutputFcn',  @ipgui_OutputFcn, ...
                   'gui_LayoutFcn',  [] , ...
                   'gui_Callback',   []);
if nargin && ischar(varargin{1})
    gui_State.gui_Callback = str2func(varargin{1});
end

if nargout
    [varargout{1:nargout}] = gui_mainfcn(gui_State, varargin{:});
else
    gui_mainfcn(gui_State, varargin{:});
end
function ipgui_OpeningFcn(hObject, eventdata, handles, varargin)
handles.output = hObject;
guidata(hObject, handles);
function varargout = ipgui_OutputFcn(hObject, eventdata, handles) 
varargout{1} = handles.output;
set(handles.output,'Name', 'IPGUI - Image Processing GUI');
function edit1_Callback(hObject, eventdata, handles)
% hObject    handle to edit1 (see GCBO)
function edit1_CreateFcn(hObject, eventdata, handles)
if ispc && isequal(get(hObject,'BackgroundColor'), get(0,'defaultUicontrolBackgroundColor'))
    set(hObject,'BackgroundColor','white');
end


% --------------------------------------------------------------------
function Menu_File_Callback(hObject, eventdata, handles)

% --------------------------------------------------------------------
function Menu_File_Open_Callback(hObject, eventdata, handles)
[handles.FileName,handles.PathName] = uigetfile( ...
{ '*.bmp;*.jpg;*.jpeg;*.pbm;*.pgm;*.png;*.ppm;*.tif;*.tiff',...
'Image Files (*.bmp;*.jpg;*.jpeg;*.pbm;*.pgm;*.png;*.ppm;*.tif;*.tiff)';...
'*.bmp','Windows Bitmap (*.bmp)';...
'*.jpg;*.jpeg','JPEG (*.jpg;*.jpeg)';...
'*.pbm','Portable Bitmap (*.pbm)';...
'*.pgm','Portable Graymap (*.pgm)';...
'*.png','Portable Network Graphics (*.png)';...
'*.ppm','Portable Pixmap (*.ppm)';...
'*.tif;*.tiff','Tagged Image File Format (*.tif;*.tiff)';...
'*.*', 'All Files (*.*)'},...
'Select an Image File to Open');
if (handles.FileName)==0
return
else
%read in image
handles.img = imread([handles.PathName, handles.FileName]);
handles.result = handles.img;
%show image
set(ipgui,'CurrentAxes',handles.axes1 ); %ipgui為主程式名稱
imshow(handles.img);
%get and show image information
[handles.rows handles.cols handles.dim] = size(handles.img);
info = imfinfo([handles.PathName,handles.FileName]);
handles.bitdepth = info.BitDepth;
handles.ColorType = info.ColorType;
info_str = cell(7,1);
info_str{1} = strcat('Image Width:', num2str(info.Width));
info_str{2} = strcat('Image Height:', num2str(info.Height));
info_str{3} = strcat('Image Dimension:', num2str(handles.dim));
info_str{4} = strcat('Bits Per Pixel:', num2str(handles.bitdepth));
info_str{5} = strcat('Max. Value:', num2str(max(handles.img(:))));
info_str{6} = strcat('Min. Value:', num2str(min(handles.img(:))));
info_str{7} = strcat('ColorType:', handles.ColorType);
set(handles.text1,'String', info_str);
%enable functions
set(handles.Menu_File_Save,'Enable','on');
%store the variable data as GUI data
guidata(hObject,handles);
end

% --------------------------------------------------------------------
function Menu_File_Save_Callback(hObject, eventdata, handles)
[filename, pathname, filterindex] = uiputfile( ...
{ '*.bmp','Windows Bitmap (*.bmp)'; ...
'*.jpg','JPEG (*.jpg)'; ...
'*.pbm','Portable Bitmap (*.pbm)'; ...
'*.pgm','Portable Graymap (*.pgm)'; ...
'*.png','Portable Network Graphics (*.png)'; ...
'*.ppm','Portable Pixmap (*.ppm)'; ...
'*.tif','Tagged Image File Format (*.tif)'}, ...
'Save Image as',...
'untitled');
if (filename)==0
return
else
fmt(1,:)='bmp';
fmt(2,:)='jpg';
fmt(3,:)='pbm';
fmt(4,:)='pgm';
fmt(5,:)='png';
fmt(6,:)='ppm';
fmt(7,:)='tif';
%write out image
imwrite(handles.result, [pathname, filename], fmt(filterindex,:));
end
% --------------------------------------------------------------------
function Menu_File_Exit_Callback(hObject, eventdata, handles)
close(ipgui); 


% --------------------------------------------------------------------
function Menu_Water_Callback(hObject, eventdata, handles)
% hObject    handle to Menu_Water (see GCBO)
% eventdata  reserved - to be defined in a future version of MATLAB
% handles    structure with handles and user data (see GUIDATA)


% --------------------------------------------------------------------
function Menu_Water_bitplane_Callback(hObject, eventdata, handles)
if (handles.dim)==1 && (handles.bitdepth)==8 %grayscale image
%extract bitplane image
for i=1:8
     imgbp(:,:,i) = bitget(handles.img,i);
 end
 %show image
 SI = figure;
 figure(SI);
 for i=1:8
 subplot(2,4,i);
 imshow(imgbp(:,:,i), []);
 title(['Bitplane ', num2str(i)]);
 end
elseif (handles.dim)==3 && (handles.bitdepth)==24
    for i=1:8
 imgbp(:,:,i) = bitget(handles.img(:,:,1),i);
 end
 %show image
 SI = figure;
 figure(SI);
 for i=1:8
 subplot(2,4,i);
 imshow(imgbp(:,:,i), []);
 title(['Bitplane ', num2str(i)]);
 end
 
 for i=1:8
 imgbp(:,:,i) = bitget(handles.img(:,:,2),i);
 end
 %show image
 SI = figure;
 figure(SI);
 for i=1:8
 subplot(2,4,i);
 imshow(imgbp(:,:,i), []);
 title(['Bitplane ', num2str(i)]);
 end
 
 for i=1:8
 imgbp(:,:,1) = bitget(handles.img(:,:,3),i);
 end
 SI = figure;
 figure(SI);
 for i=1:8
 subplot(2,4,i);
 imshow(imgbp(:,:,i), []);
 title(['Bitplane ', num2str(i)]);
 end
else
 warndlg('The image is not an 8-bit grayscale image.','Warning')
 return
end

% --------------------------------------------------------------------
function Menu_Water_LSB_Callback(hObject, eventdata, handles)
[FileName,PathName] = uigetfile( ...
{ '*.bmp;*.jpg;*.jpeg;*.pbm;*.pgm;*.png;*.ppm;*.tif;*.tiff',...
 'Image Files (*.bmp;*.jpg;*.jpeg;*.pbm;*.pgm;*.png;*.ppm;*.tif;*.tiff)';
 '*.bmp','Windows Bitmap (*.bmp)';...
 '*.jpg;*.jpeg','JPEG (*.jpg;*.jpeg)';...
 '*.pbm','Portable Bitmap (*.pbm)';...
 '*.pgm','Portable Graymap (*.pgm)';...
 '*.png','Portable Network Graphics (*.png)';...
 '*.ppm','Portable Pixmap (*.ppm)';...
 '*.tif;*.tiff','Tagged Image File Format (*.tif;*.tiff)';...
 '*.*', 'All Files (*.*)'},...
 'Select a Watermark Image to Open');
if(FileName)==0
    return
else
    if(handles.dim)==1&&(handles.bitdepth)==8
        water_img= imread([PathName,FileName]);
        water_info = imfinfo([PathName,FileName]);
        [rows cols dim] = size(water_img);
        if(water_info.BitDepth)==1
            for i=1:8
                handles.result(1:rows,1:cols)=bitset(handles.img(1:rows,1:cols),i,water_img);
                figure(i),imshow(handles.result); 
                
            end
            %handles.result(1:rows,1:cols)=bitset(handles.img(1:rows,1:cols),8,water_img);
            set(ipgui,'CurrentAxes',handles.axes2)
            imshow(handles.result);
            imwrite(handles.result,'藏在第八層.bmp','bmp');
            
            mse = sum(sum((double(handles.img)-double(handles.result))^2))/(handles.rows*handles.cols);
            PSNR = 10*log10(255*255/mse);
            set(handles.text2,'String', strcat('PSNR=', num2str(PSNR), ' dB'));
            guidata(hObject,handles);
        else
            warndlg('The watermark image is not binary.','Warning')
            return
        end
    else
        warndlg('The source image is not an 8-bit grayscale image.','Warning')
        return
    end
end 


% --------------------------------------------------------------------
function unwater_tag_Callback(hObject, eventdata, handles)
% hObject    handle to unwater_tag (see GCBO)
% eventdata  reserved - to be defined in a future version of MATLAB
% handles    structure with handles and user data (see GUIDATA)
gray=imread('lenna_gray256.bmp');
gray_8=bitget(gray,8);
gray_6=bitget(gray,6);
gray_7=bitget(gray,7);
woman=imread('FotoJet.bmp');
woman_to_binary=im2bw(woman);
gray_set=bitset(gray,1,woman_to_binary);
gray_set_8=bitset(gray,8,woman_to_binary);
gray_get_8=bitget(gray_set_8,8);
gray_get_1=bitget(gray_set,1);
figure,%新打?一?窗口
subplot(221),imshow(gray),title('原始圖像');
subplot(222),imshow(logical(gray_8)),title('原始圖像的第八層');
subplot(223),imshow(gray_set_8),title('藏在第八層的資料');
subplot(224),imshow(logical(gray_get_8)),title('隱藏的圖像');
figure,%新打?一?窗口
subplot(221),imshow(gray),title('原始圖像');
subplot(222),imshow(woman_to_binary),title('要隱藏的圖像');
subplot(223),imshow(gray_set),title('隱藏在第一層的圖像');
subplot(224),imshow(logical(gray_get_1)),title('獲得隱藏的圖像');
