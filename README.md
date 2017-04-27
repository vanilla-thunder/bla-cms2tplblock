# bla-cms2tplblock
with this module you can inject one CMS page into each template block just like you could do it with a module

### regular module block definition:
````php
'blocks' => [
    [
        'template' => 'page/details/inc/productmain.tpl',
        'block' => 'details_productmain_stockstatus',
        'file' => '/application/views/blocks/details_productmain_stockstatus.tpl'
    ]
]
````
### cms page with same effect as tpl block:
cms title = block template: page/details/inc/productmain.tpl  
cms oxloadid = block name: details_productmain_stockstatus  
cms content = block file content:  
````html
<h1>hello!</h1>
[{$smarty.block.parent}]
````
