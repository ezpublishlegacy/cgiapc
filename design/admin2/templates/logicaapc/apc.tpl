<div class="context-block">

{* DESIGN: Header START *}<div class="box-header"><div class="box-ml">

<h1 class="context-title">{'APC monitoring'|i18n( 'design/admin/logicaapc/apc' )}</h1>

{* DESIGN: Mainline *}<div class="header-mainline"></div>

{* DESIGN: Header END *}</div></div>

{* DESIGN: Content START *}<div class="box-ml"><div class="box-mr"><div class="box-content">

<iframe id="apciFrame" src={'logicaapc/apc.php'|ezurl()} style="display: block; border: none; width: 100%; height: 500px"></iframe>
{literal}<script type="text/javascript">$('#apciFrame').load(function () {
    /* Monitor use absolute :( */
    $height = $(this).contents().find(".head").height() +
              $(this).contents().find(".menu").height() +
              $(this).contents().find(".content").height()
              + 100;
    $(this).height($height);
    $(this).width($('#apciFrame').contents().width());
});</script>{/literal}

{* DESIGN: Content END *}</div></div></div>

</div>