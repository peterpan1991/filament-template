## filament 初始化模板

这是一个用于初始化 Filament Admin Panel 的模板项目，基于 Laravel 框架。

包含简单的User模型和登录页面。

## 初始化步骤
- git clone <你的仓库地址>
- cp .env.example .env (复制环境变量)
- composer install (安装 PHP 依赖)
- npm install (安装前端依赖)
- php artisan key:generate (生成新的应用密钥，非常重要)
- 配置 .env 中的数据库连接信息。
- php artisan migrate (迁移数据库)
- php artisan db:seed (填充数据)
- npm run build (编译前端资源)