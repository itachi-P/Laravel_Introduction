<?php
namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $content = $response->content() ;
        
        # 正規表現による置換でHTML中の<middlewara>タグの中身からリンクを自動生成する
        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);
        $response -> setContent($content);
        return $response;
    }
}
