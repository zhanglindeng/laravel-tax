# laravel-tax

laravel personal tax calculate component
（工资个税计算，仅仅是为了学习记录开发laravel组件）


### 安装
- composer依赖：`composer require zhanglindeng/laravel-tax`
- 服务：`config/app.php` 中的 `providers` 添加 `Dzlin\Tax\TaxServiceProvider::class`
- Facade：`config/app.php` 中的 `aliases` 添加 `'Tax'       => Dzlin\Tax\Facade::class`
- 发布配置文件：`php artisan vendor:publish`
- 编辑配置文件 `config/tax.php`

### 一些关于 laravel 的文章链接
- https://laravel-china.org/topics/3593
- https://blog.wu-boy.com/2016/03/why-i-choose-laravel-framework/
- https://blog.wu-boy.com/2016/01/how-to-choose-web-framework/
- https://www.zhihu.com/question/30622752/answer/136397605
- https://laravel-china.org/topics/3452
- https://laravel-china.org/topics/2376
- https://laravel-china.org/topics/1340
- http://www.cnblogs.com/zdz8207/p/PHP-Laravel.html
- https://segmentfault.com/q/1010000000489103
- http://oomusou.io/laravel/laravel-for-newbie/
- http://witmax.cn/php-framework-comparison.html
- http://www.loveseem.com/article_20.html
