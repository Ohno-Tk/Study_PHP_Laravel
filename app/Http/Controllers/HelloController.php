<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body,$end;
$style = <<<EOF
<style>
    body {font-size:16pt; color:#999;}
    h1 {foont-size:100pt; text-align:right; color:#eee;
        margin:-40px 0px -50px 0px; }
</style>
EOF;

$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt){
    return "<{$tag}>".$txt."</{$tag}>";
}

class HelloController extends Controller
{
    public function index($id='noname', $pass='unknown'){

        global $head, $style, $body,$end;

        $html = $head.tag('title', 'hello/index').$style.$body.
        tag('h1','index').tag('p','this is index page.')
        .'<a href="/hello/other">go to other page</a>'
        .$end;

        return $html;
    }

    public function other(){
        global $head, $style, $body,$end;

        $html = $head.tag('title', 'hello/other').$style.$body
        .tag('h1','other').tag('p','this is other page.')
        .$end;

        return $html;
    }


    /* public function index($id='noname', $pass='unknown'){

        return <<<EOF

        <html>
        <head>
        <title>Hello/index</title>
        <style>
        body {font-size:16pt; color:#999;}
        h1 {foont-size:100pt; text-align:right; color:#eee;
            margin:-40px 0px -50px 0px; }
        </style>
        </head>
        <body>
            <h1>index</h1>
            <p>これは、helloコントローラのindexアクションです。</p>
            <ul>
                <li>ID: {$id}</li>
                <li>PASS: {$pass}</li>
            </ul>
        </body>
        </html>

        EOF;
    } */
}
