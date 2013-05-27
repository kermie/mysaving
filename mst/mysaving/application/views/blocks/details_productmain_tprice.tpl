[{$smarty.block.parent}]

[{*implement your own CSS*}]
[{oxstyle include=$oViewConf->getModuleUrl("mysaving", "out/azure/src/css/mysaving.css") }]

[{*another example for implementing your own JavaScript*}]
[{*oxscript include=$oViewConf->getModuleUrl("ssoxidtracecollector", "out/src/js/ssoxidtracercollector.js")*}]


[{*if there is no saving do not output anything*}]
[{assign var="saving" value=$oDetailsProduct->getMySaving()}]
[{if $saving > '' }]
        <span class="saving">[{oxmultilang ident="MST_MYSAVING_PERCENTSAVED" args=$saving}]</span>
[{/if}]

[{*not recommended to do this, because it could become a performance killer (getMySaving() would be called twice :-):*}]
[{*if $oDetailsProduct->getMySaving() }]
    [{oxmultilang ident="MST_MYSAVING_PERCENTSAVED" args=$oDetailsProduct->getMySaving()}]
[{/if*}]