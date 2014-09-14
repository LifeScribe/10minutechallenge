<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '769634313082294',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
		<div id="wholepage" style="display:none"> 
			<div id="foo" data-dojo-type="dojox/mobile/View" data-dojo-props="selected:'true'">
				<h1 data-dojo-type="dojox/mobile/Heading">10 Minute Challenge</h1>
<p>The 10 Minute Give is a movement designed to inspire people around the world to 
set aside 10 minutes per week to engage other in acts of generosity. During a 6 week 
period, weekly challenges will be shared that are specifically designed to encourage 
participants to think outwardly and use their time, talents and abilities to have a 
meaningful impact on others. Hopefully after a period of time, it will become second 
nature for those involved to put their own ambitions aside and look for creative ways to 
enrich the lives of those around them.</p>
				<ul data-dojo-type="dojox/mobile/RoundRectList">
					<li id="sdb" data-dojo-type="dojox/mobile/ListItem" data-dojo-props="transition: 'slide', moveTo: 'settings'">
						Accept the Challenge
					</li>
<!-- 					<li id="rdb" data-dojo-type="dojox/mobile/ListItem" data-dojo-props="transition: 'slide', moveTo: 'repeat'">
						WidgetList Data Binding
					</li>
					<li id="sfg" data-dojo-type="dojox/mobile/ListItem"  data-dojo-props="transition: 'slide', moveTo: 'generate'">
						Generate Simple Form
					</li>
-->				</ul>
<iframe class="youtube-player" type="text/html" width="432" height="270" style="max-width:100%;" src="http://www.youtube.com/embed/o5sSTmvq0yo?wmode=opaque" frameborder="0"></iframe>
			</div>
			<span data-dojo-id="nameCtl"
				data-dojo-type="demos/mobileMvc/MobileDemoContactController"
				data-dojo-props="sourceModel: require('demos/mobileMvc/MobileDemoContactModel'),
				                 cursorIndex: 'ShipTo'"></span>
			<div id="settings" data-dojo-type="dojox/mobile/ScrollableView">
				<h1 id="home" data-dojo-type="dojox/mobile/Heading" data-dojo-props="back: 'Back', moveTo: 'foo'">Signup Page</h1>
				<form action="//10MinuteGive.us9.list-manage.com/subscribe/post?u=beb0e1b0dad76edb4f85c6020&amp;id=a662c9ce7b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>	
				<div class="field-title">Who Are You?</div>
					<div class="fieldset"
						data-dojo-type="dojox/mvc/Group"
						data-dojo-props="target: at(nameCtl, 'model')">
						<table id="table" cellspacing="10"  style="width: 100%">
							<tr>
								<td style="width: 100px;" class="layout">First Name</td>
								<td class="layout">							
									<input  type="text" value="" name="FNAME" class="required" id="mce-FNAME" data-dojo-type="dojox/mobile/TextBox" 
										data-dojo-props="value: at('rel:', 'FNAME'), placeholder: 'First'">
								</td>
							</tr>
							<tr>
								<td style="width: 100px;" class="layout">Last Name</td>
								<td class="layout">
									<input type="text" value="" name="LNAME" class="required" id="mce-LNAME" data-dojo-type="dojox/mobile/TextBox"
										data-dojo-props="placeholder: 'Last Name', value: at('rel:', 'LNAME')">
								</td>
							</tr>
							<tr>
								<td style="width: 100px;" class="layout">Email</td>
								<td class="layout">
									<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" data-dojo-type="dojox/mobile/TextBox"
										data-dojo-props="value: at('rel:', 'EMAIL'), placeholder: 'Email'">
								</td>
							</tr>
						</table>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="display: none; position: absolute; left: -5000px;"><input type="text" name="b_beb0e1b0dad76edb4f85c6020_a662c9ce7b" tabindex="-1" value=""></div>
						<div class="spacer"></div>
<!--						<button id="shipto" type="button" class="mblBlueButton"
							data-dojo-type="dojox/mobile/Button"
							onclick="nameCtl.set('cursorIndex', 'ShipTo');">Submit</button>
						<button id="billto" type="button" class="mblBlueButton"
							data-dojo-type="dojox/mobile/Button"
							onclick="nameCtl.set('cursorIndex', 'BillTo');">Bill To</button>		
						<br/>
						<div class="fieldset" id="addrGroup"
							data-dojo-type="dojox/mvc/Group" 
							data-dojo-props="target: at(nameCtl, 'cursor')">
							<table id="table" cellspacing="10" style="width: 100%">
								<tr>
									<td style="width: 100px;" class="layout">Street</td>
									<td class="layout">							
										<input  id="streetInput" data-dojo-type="dojox/mobile/TextBox" 
											data-dojo-props="value: at('rel:', 'Street'), placeholder: 'Street'">
									</td>
								</tr>
								<tr>
									<td style="width: 100px;" class="layout">City</td>
									<td class="layout">
										<input id="cityInput" data-dojo-type="dojox/mobile/TextBox"
											 
											data-dojo-props="placeholder: 'City', value: at('rel:', 'City')">
									</td>
								</tr>
								<tr>
									<td style="width: 100px;" class="layout">State</td>
									<td class="layout">
										<input  id="StateInput" data-dojo-type="dojox/mobile/TextBox"
											data-dojo-props="value: at('rel:', 'State'), placeholder: 'State'">
									</td>
								</tr>
								<tr>
									<td style="width: 100px;" class="layout">State</td>
									<td class="layout">
										<input  id="ZipInput" data-dojo-type="dojox/mobile/TextBox"
											data-dojo-props="value: at('rel:', 'Zip'), placeholder: 'Zip Code'">
									</td>
								</tr>
							</table>
						</div>
-->
					</div> <!--  end of outer group -->
					<div class="spacer"></div>
					<button value="Subscribe" name="subscribe" id="mc-embedded-subscribe" type="submit" data-dojo-type="dojox/mobile/Button" class="mblBlueButton">Submit</button>

				</form>
			</div>
			<span data-dojo-id="listCtl"
				data-dojo-type="demos/mobileMvc/MobileDemoContactListController"
				data-dojo-props="model: require('demos/mobileMvc/MobileDemoContactListModel'),
				                 summaryScrollableViewId: 'repeat',
				                 detailScrollableViewId: 'repeatdetails',
				                 initialFocusElementId: 'firstInput'"></span>
			<div id="repeat" data-dojo-type="dojox/mobile/ScrollableView">
				<h1 data-dojo-type="dojox/mobile/Heading"
					data-dojo-props="back: 'Back', moveTo: 'foo'">
					WidgetList Data
					<span id="addbutton"  data-dojo-type="dojox/mobile/ToolBarButton" 
						data-dojo-props="icon: 'mblDomButtonWhitePlus',
						                 onClick: function(){ listCtl.addEmpty(); }"
						style="float:right;"></span>
				</h1>
				<ul id="listItems"
					data-dojo-type="dojox/mobile/RoundRectList"
					data-dojo-mixins="dojox/mvc/WidgetList,dojox/mvc/_InlineTemplateMixin"
					data-dojo-props="children: at(listCtl, 'model')"
					data-mvc-child-type="dojox/mvc/Templated"
					data-mvc-child-mixins="dojox/mobile/ListItem"
					data-mvc-child-props="moveTo: 'repeatdetails',
					                      uniqueId: at(this.target, 'uniqueId'),
					                      transitionOptions: {title: 'Detail', target: 'details,detail'},
					                      clickable: 'true',
					                      callback: function(){ listCtl.setDetailsContext(this.uniqueId); }">
					<script type="dojox/mvc/InlineTemplate">
						<li data-dojo-type="dojox/mobile/ListItem" 
							<table>
								<tr>
									<td>
										<div data-dojo-type="dojox/mobile/ToolBarButton" 
											data-dojo-props="icon: 'mblDomButtonRedCircleMinus', 
											                 onClick: function(){ listCtl.remove(this.uniqueId); return false; },
											                 uniqueId: at('rel:', 'uniqueId')" 
											style="float: left; color: white; background-color: transparent; background-image: none; border: none; margin-top: 0px;"></div>
									</td>
								</tr>
							</table>
							<div class="mblListItemLabel" style="display: block;" data-dojo-type="dojox/mvc/Output" data-dojo-props="value: at('rel:', 'First')"></div>
						</li>
					</script>
				</ul>
			</div>
			<div id="repeatdetails" data-dojo-type="dojox/mobile/ScrollableView">
		 		<h1 id="detailsHeading" data-dojo-type="dojox/mobile/Heading" data-dojo-props="label: 'Details'" data-app-region="top">
					<div id="detail_back" data-dojo-type="dojox/mobile/ToolBarButton" 
						data-dojo-props="onClick: function(e){ require('dijit/registry').byId('telInput').focus(); }, moveTo:'repeat', arrow: 'left', label: 'Back'" style="float:left"></div>
				</h1>
				<div id="detailsGroup" class="fieldset" data-dojo-type="dojox/mvc/Group" 
					data-dojo-props="target: at(listCtl, 'cursor')">
					<div class="row">
						<div style="display: inline-block;" id="detailsBanner">Details for selected index:</div>
						<span class="cell" id="indexOutput"
							data-dojo-type="dojox/mvc/Output"
							data-dojo-props="value: at(listCtl, 'cursorIndex')"></span>
					</div>
					<table id="table" cellspacing="10"  style="width: 100%">
						<tr>
							<td style="width: 100px;" class="layout">First Name</td>
							<td class="layout">							
								<input  id="firstInput" data-dojo-type="dojox/mobile/TextBox" 
									data-dojo-props="value: at('rel:', 'First'), placeholder: 'First Name'">
							</td>
						</tr>
						<tr>
							<td style="width: 100px;" class="layout">Last Name</td>
							<td class="layout">
								<input id="lastInput" data-dojo-type="dojox/mobile/TextBox"
									 
									data-dojo-props="placeholder: 'Last Name', value: at('rel:', 'Last')">
							</td>
						</tr>
						<tr>
							<td style="width: 100px;" class="layout">Email</td>
							<td class="layout">
								<input  id="emailInput2" data-dojo-type="dojox/mobile/TextBox"
									data-dojo-props="value: at('rel:', 'Email'), placeholder: 'Email'">
							</td>
						</tr>
						<tr>
							<td style="width: 100px;" class="layout">Telephone</td>
							<td class="layout">
								<input  id="telInput" data-dojo-type="dojox/mobile/TextBox"
									data-dojo-props="value: at('rel:', 'Tel'), placeholder: 'Telephone'">
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div id="generate" data-dojo-type="dojox/mobile/ScrollableView">
				<h1 data-dojo-type="dojox/mobile/Heading" data-dojo-props='back:"Back", moveTo:"foo"'>Simple Form Generate Example</h1>
				<div class="field-title"></div>
				<div id="main">
					<div id="leftNav"></div>
					<div id="mainContent" class="generate-maincontent">
						<div id="outerModelArea">
							<div id="generateModel">Model</div>
							<div class="generate-textarea-row">
								<textarea class="generate-textarea-cell" 
										data-dojo-type="dojox/mobile/TextArea" id="modelArea">
{
	"Serial": "11111",
	"First": "John",
	"Last": "Doe",
	"Email": "jdoe@example.com",
	"Phones": [
		{
			"Office": "111-111-1111"
		},
		{
			"Mobile": "222-222-2222"
		}
	]
}
								</textarea>
							</div>
							<div class="fieldset">
								<div class="spacer"></div>
								<button id="generate1" type="button" class="mblBlueButton"
									data-dojo-type="dojox/mobile/Button"
									onclick="require('demos/mobileMvc/MobileDemoGenerateActions').switchToGenerated()">Generate Form</button>
							</div>
						</div>
						<div id="viewArea" style="display:none">
							<div id="generateView">Generated View</div>
								<div class="fieldset">
								<div id="view" data-dojo-type="dojox/mvc/Generate"
					 				data-dojo-props="widgetMapping:{'String' : 'dojox/mobile/TextBox'},
					 				                 idNameMapping: {String: 'TB'},
					 				                 children: at('widget:modelArea', 'value').direction(at.from).transform({format: require('dojo/json').parse})">
					 			</div>
							</div>
							<div class="fieldset">
								<div class="spacer"></div>
								<button id="updateModel" type="button" class="mblBlueButton"
									data-dojo-type="dojox/mobile/Button"
									onclick="require('demos/mobileMvc/MobileDemoGenerateActions').switchToData();">Update Model</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
