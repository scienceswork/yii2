% lamdba表示单位时间内到达排队处的顾客数
lamdba = 2;
% mu表示单位时间内单个服务台完成的服务次数，1次服务次数表示一个顾客
mu = 3;
% 前台的个数
s = 1;
% ro表示单位时间内的服务效率
ro = lamdba/mu;
% ros表示单位时间内单个服务台的服务效率
ros = ro/s;
sum1 = 0;
% factorial为阶乘函数 eg:factorial(5)=5!;
for i = 0:s-1
    sum1 = sum1 + ro.^i/factorial(i);
end
sum2 = ro.^s/factorial(s)/(1-ros);
p0 = 1/(sum1 + sum2);
p = ro.^s.*p0/factorial(a)/(1-ros);
Lq = p.*ros/(1 - ros);
L = Lq + ro;
W = L / lambda;
Wq = Lq / lambda;
% x(1)表示空闲率
x(1) = p0;
% x(2)表示顾客到达系统时需要等待的概率
x(2) = p;
% x(3)表示平均等待队长
x(3) = Lq;
% x(4)表示平均队长
x(4) = L;
% x(5)表示顾客平均逗留时间
x(5) = W;
% x(6)表示顾客平均等待时间
x(6) = Wq;
%％ 几点概念
% 1.系统的输入过程服从泊松分布，即客户在单位时间内到达的数量
% 2.客户的服务时间服从负指数分布
% 输入的s=1，则表示为单服务台
% 该模型为M/M/1标准型










