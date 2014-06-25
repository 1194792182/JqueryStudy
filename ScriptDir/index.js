(function() {
		  
	var config={
		themesDir:"/ThemesDir/",
		themesColorDir:"metro/",
		easyuiCssFile:"easyui.css",
		iconCssFile:"icon.css",
		demoCssFile:"demo.css",
		scriptDir:"/ScriptDir/",
		easyUIJqueryJsFile:"EasyUIJquery.js",
		jEasyuiJsFile:"jEasyui.js"
		};
	
	var setScriptAttr = function(obj, src) {
		obj.setAttribute("type", "text/javascript");
		obj.setAttribute("src", src)
	};
	var setLinkAttr=function(obj,href)
	{
		obj.setAttribute("type", "text/css");
		obj.setAttribute("rel", "stylesheet")
		obj.setAttribute("href", href)
	};
	
	var headObj = document.getElementsByTagName("head")[0];
	var scriptObj=document.getElementsByTagName("script")[0];
	
	var cssEasyUILinkObj=document.createElement("link");
	setLinkAttr(cssEasyUILinkObj,config.themesDir+config.themesColorDir +config.easyuiCssFile);
	headObj.insertBefore(cssEasyUILinkObj, scriptObj);
	

	var cssIconLinkObj=document.createElement("link");
	setLinkAttr(cssIconLinkObj,config.themesDir+config.iconCssFile);
	headObj.insertBefore(cssIconLinkObj, scriptObj);

	var cssDemoLinkObj=document.createElement("link");
	setLinkAttr(cssDemoLinkObj,config.themesDir+config.demoCssFile);
	headObj.insertBefore(cssDemoLinkObj, scriptObj);
	
	var jqueryScriptObj = document.createElement("Script");
	setScriptAttr(jqueryScriptObj, config.scriptDir+config.easyUIJqueryJsFile);
	headObj.insertBefore(jqueryScriptObj, scriptObj);
	
	var jEasyuiObj = document.createElement("Script");
	setScriptAttr(jEasyuiObj, config.scriptDir+config.jEasyuiJsFile);
	headObj.insertBefore(jEasyuiObj, scriptObj);
})();