
x = 0:.1:4*pi;
y = @(x) sin(x)./cos(x);
 
y0 = y(x);
yy1 = diff(y0);
yy1 = sign(yy1);
yy1 = diff(yy1);
f = find(yy1<0)+1; % оp
g = find(yy1>0)+1; % иж
 
hold on;
plot(x,y0);
plot(x(f),y(x(f)),'ro');

plot(x(g),y(x(g)),'go');

hold off;
grid on;
%fprintf('%s\n',num2str(y(x(g))  ))

figure

x=[
1.5             1.6        4.7        4.8             7.8                           7.9        10.9      11
];
y=[14.1014     -34.23253    80.7128    -11.38487    18.5068             -21.71511   10.4312      -225.9508
];
hold on;
plot(x,y);
hold off;
grid on;





