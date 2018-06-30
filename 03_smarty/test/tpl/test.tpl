{$articletitle}
<hr>
{$arr.title}
{$arr.author}
<hr>
{$arr['title']}
{$arr['author']}
<hr>
{$arr['articlecontent']['content']}
{*$arr['articlecontent']['level']*}
<hr>
{$articletitle|capitalize}
{$articletitle|cat:" tomorrow"}
<hr>
{$time}
{$time|date_format}
{$time|date_format:"%H:%M:%S"}
<hr>
{$default|default:'default'}
<hr>
{$url|escape:'url'}
<hr>
{$articletitle|upper}
{$articletitle|lower}
<hr>
{$enter}
{$enter|nl2br}
<hr>
{if $score gt 90}
good
{elseif $score gt 60}
pass
{else}
fail
{/if}
<hr>
{section name=article loop=$articlelist max=2}
{$articlelist[article].title}
{$articlelist[article].author}
{$articlelist[article].content}
<br>
{/section}
<hr>
{*foreach item=article from=$articlelist*}
{foreach $articlelist as $article}
{$article.title}
{$article.author}
{$article.content}
<br>
{foreachelse}
No Article
{/foreach}
<hr>
{include file="header.tpl" sitename="awesome"}
<hr>
{$myobj->method(array('apple','can be eaten'))}
<hr>
{"Y-m-d"|date:$time}
<hr>
{$str}
<br>
{'d'|str_replace:'h':$str}
<hr>
{f_test p1='abc' p2='efg'}
<hr>
{test width=150 height=200}
<hr>
{$time|test:'Y-m-d H:i:s'}
<hr>
{test2 replace='true' maximum=29}
{$string}
{/test2}




