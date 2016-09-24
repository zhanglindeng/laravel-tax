# laravel-tax

laravel personal tax calculate component
（工资个税计算，仅仅是为了学习记录开发laravel组件）


### 安装
- composer依赖：`composer require zhanglindeng/laravel-tax`
- 服务：`config/app.php` 中的 `providers` 添加 `Dzlin\Tax\TaxServiceProvider::class`
- Facade：`config/app.php` 中的 `aliases` 添加 `'Tax'       => Dzlin\Tax\Facade::class`
- 发布配置文件：`php artisan vendor:publish`
- 编辑配置文件 `config/tax.php`
