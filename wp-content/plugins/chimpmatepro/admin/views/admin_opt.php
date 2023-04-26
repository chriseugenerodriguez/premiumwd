<?php
switch($tab){
	case 'general':
?>
<div class="wpmca_item genhead simghead">
	<div class="itemhead">
		<h2>Connection Settings</h2>
	</div>
	<div class="wpmca_group wpmcatxt">
		<input type="text" class="wpmchimp_text" spellcheck="false" id="api_key" required ng-model="data.api_key">
		<span class="wpmcahint" data-hint="Enter your API Key"></span>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>API Key</label>
	</div>
	<div class="wpmca_group">
			<div class="wpmcapara hinted">Click <a href="https://admin.mailchimp.com/account/api/" target="_blank" class="wpmclink">here</a> to get API key or Sign up <a href="http://eepurl.com/4lavL" class="wpmclink">here</a></div>
		</div>
	<div class="wpmca_group">
			<button class="wpmca_button green material-design" ng-click="api_verify()">Get Lists</button>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Multiple Forms</h2>
	</div>
	<div class="wpmca_group wpmca_table_cont">
		<div class="wpmca_table">
			<div class="wpmca_tablehg">
				<div class="wpmca_tabler">
					<div>No</div>
					<div style="width: 100px;">Form</div>
					<div>List</div>
					<div>Options</div>
				</div>
			</div>
			<div class="wpmca_tablerg">
				<div class="wpmca_tabler" ng-repeat="cform in data.cforms track by $index">
					<div>{{$index + 1}}</div>
					<div>
						<input type="text" class="wpmc_tabtext" required ng-model="cform.name">
						<div class="bar"></div>
					</div>
					<div>
						<div class="wpmc_drop">
							<div class="wpmc_drop_head"><div>{{cform.list.name || (data.lists.length?'Select List':'No Lists')}}</div>
								<div class="bar"></div>
							</div>
							<div class="wpmc_drop_body">
								<div ng-repeat="list in data.lists" ng-click="drop_sel('list',$parent.$index,$index)" ng-class="{'drop-sel': list.id==cform.list.id }">{{list.name}}</div>
							</div>
						</div>
					</div>
					<div>
						<div class="mul_ico mul_del" ng-click="del_form(0,$index)"></div>
						<div class="mul_ico mul_edit" ng-click="edit_form(0,$index)" ng-show="cform.list"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="wpmca_table_foot">
			<div class="wpmca_conbox blue add" ng-click="del_form(3)"></div>
			<div style="clear:both"></div>
		</div>
	</div>
	<div class="wpmca_group selcon" ng-show="formselcon>-1">
		<div class="selconmsg">Are you sure you want to delete {{cforms[formselcon].name}}?</div>
		<div class="wpmca_conbox confirm" ng-click="del_form(1)"></div>
		<div class="wpmca_conbox decline" ng-click="del_form(2)"></div>
		<div style="clear:both"></div>
	</div>
	<div class="wpmca_group" ng-show="formedit>-1">
		<div class="itemhead subitemhead">
			<h2>Edit fields</h2>
		</div>
		<div class="wpmca_table_cont wpmcatxts wpmcacm" ng-show="formedit>-1">
			<div class="wpmca_table">
				<div class="wpmca_tablehg">
					<div class="wpmca_tabler">
						<div></div>
						<div>Icon</div>
						<div>Label</div>
						<div>Field</div>
						<div>RQ</div>
						<div>EFT</div>
						<div></div>
					</div>
				</div>
				<div class="wpmca_tablerg" as-sortable="sortableOptions" ng-model="cform.fields">
					<div class="wpmca_tabler" ng-repeat="cfield in cform.fields" as-sortable-item class="as-sortable-item mulfieldr">
						<div as-sortable-item-handle class="as-sortable-item-handle"></div>
						<div class="ico_sel">
							<div class="wpmc_drop" ng-hide="cfield.cat == 'group' || ['checkboxes','radio','dropdown','address'].indexOf(cfield.type) != -1">
								<div class="wpmc_drop_head"><div ng-class="cfield.icon"></div>
									<div class="bar"></div>
								</div>
								<div class="wpmc_drop_body">
									<div class="longcell inone" ng-click="cfield.icon='inone'" ng-class="{'drop-sel': cfield.icon=='inone' }"></div>
									<div class="longcell idef" ng-click="cfield.icon='idef'" ng-class="{'drop-sel': cfield.icon=='idef' }"></div>
									<div ng-repeat="(k, v) in icons" ng-click="cfield.icon=k" class="{{k}}" ng-class="{'drop-sel': k == cfield.icon }"></div>
								</div>
							</div>
						</div>
						<div>
							<input type="text" class="wpmc_tabtext" required ng-model="cfield.label">
							<div class="bar"></div>
						</div>
						<div>
							<div class="wpmc_drop wpmc_dropf">
								<div class="wpmc_drop_head"><div>{{cfield.name || (cfields.length?'Select Field':'No Field')}}</div>
									<div class="bar"></div>
								</div>
								<div class="wpmc_drop_body">
									<div ng-repeat="field in cfields " ng-click="drop_sel('field',$parent.$index,$index,$event)" ng-class="{ 'drop-group': fieldisgroup(field), 'drop-dis': fieldisused(field), 'drop-sel': field.id?field.id==cfield.id:field.tag==cfield.tag, 'drop-hide' : field.type == 'hidden' }">{{field.name}}({{field.type}})</div>
								</div>
							</div>
						</div>
						<div>
							<label ng-hide="cfield.req" class="mcheckbox">
								<input type="checkbox" ng-model="cfield.foreq" ng-true-value="true">
								<div></div>
							</label>
						</div>
						<div>
							<label ng-hide="cfield.cat == 'group' || ['radio','email'].indexOf(cfield.type) != -1" class="mcheckbox">
								<input type="checkbox" ng-model="cfield.eft" ng-true-value="true" ng-change="eftchange(cfield.uid)">
								<div></div>
							</label>
						</div>
						<div><div class="mul_ico mul_del" ng-click="del_field(0,$index)" ng-hide="cfield.req"></div><div class="mul_ico mul_req" ng-show="cfield.req"></div></div>
					</div>
				</div>
			</div>
			<div class="wpmca_table_preset" ng-class="{'wpmca_tabshow':grouppretab}">
				<div class="wpmca_prehead" ng-click="grouppretab = {1:0,0:1}[grouppretab]">Additional Options</div>
				<div class="wpmca_prebody">
					<div class="wpmca_preopt" ng-if="cgroups.length">
						<div class="wpmca_prebodyh">Hidden Preset Groups</div>
						<div class="wpmca_pregroups" ng-repeat="psgroup in cgroups">
							<div class="wpmca_pregrouph">{{psgroup.name}}</div>
							<div class="wpmca_pregroupb">
								<label class="mcheckbox" ng-repeat="psfield in psgroup.groups">
									<input type="checkbox" name="selectedFields[]" value="{{psgroup.id+'.'+psfield.id}}" ng-checked="cform.preset.indexOf(psgroup.id+'.'+psfield.id) > -1" ng-click="togglePsgroup(psgroup.id+'.'+psfield.id)">
									<div>{{psfield.gname}}</div>
								</label>
							</div>
						</div>
					</div>
					<div class="wpmca_preopt">
						<label class="mcheckbox">
							<input type="checkbox" ng-model="cform.scroll" ng-true-value="'1'">
							<div class="wpmca_prebodyh">Enable Scroll for Lightbox</div>
						</label>
						<span class="wpmcahint" data-hint="Recommended for long forms"></span>
					</div>
				</div>
			</div>
			<div class="wpmca_table_foot">
				<div class="wpmca_conbox blue add" ng-click="del_field(3)"></div>
					<div class="wpmca_conbox ok" ng-click="edit_form(1)"></div>
					<div class="wpmca_conbox cancel" ng-click="edit_form(2)"></div>
					<div style="clear:both"></div>
			</div>
		</div>
			<div class="wpmcfull">*<span class="wpmcbold">RQ</span> - Required Field<br>
			*<span class="wpmcbold">EFT</span> - Extra Field for Topbar other than email</div>
	</div>
	<div class="wpmca_group selcon" ng-show="fieldselcon>-1">
		<div class="selconmsg">Are you sure you want to delete {{cform.fields[fieldselcon].name}}?</div>
		<div class="wpmca_conbox confirm" ng-click="del_field(1)"></div>
		<div class="wpmca_conbox decline" ng-click="del_field(2)"></div>
		<div style="clear:both"></div>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Other Options</h2>
	</div>
	<div class="wpmca_group">
		<div class="paper-toggle">
			<input type="checkbox" id="opt-in" ng-model="data.opt_in" ng-true-value="'1'" class="wpmcatoggle"/>
			<label for="opt-in">Double Opt-in Process</label>
		</div>
		<span class="wpmcahint" data-hint="Email Confirmation Message"></span>
	</div>
</div>
 <div class="wpmca_item">
	<div class="itemhead">
		<h2>Error Messages</h2>
		<span class="wpmcahint headhint" data-hint="Set Respective Error Messages"></span>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" spellcheck="false" ng-model="data.errorrf" required>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Required Field</label>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" spellcheck="false" ng-model="data.errorfe" required>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Invalid Entry</label>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" spellcheck="false" ng-model="data.erroras" required>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Already subscribed</label>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" spellcheck="false" ng-model="data.errorue" required>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Unknown error</label>
	</div>
	</div>

 <div class="wpmca_item">
	<div class="itemhead">
		<h2>Social API Keys</h2>
		<span class="wpmcahint headhint" data-hint="Set Social API Keys for Subscribe with Social Logins(wherever applicable)"></span>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.fb_api">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Facebook App ID</label>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.gp_api">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Google App Client ID for Web</label>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.ms_api">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Microsoft App Client ID</label>
		Please provide the Redirect URI while creating a Microsoft App as :<br>
		<?php echo WPMCA_PLUGIN_URL. 'assets/ms-oauth.php';?>
	</div>
</div>

<div class="wpmca_item">
	<div class="itemhead">
		<h2>User Status</h2>
		<span class="wpmcahint headhint" data-hint="Show Subscription form if the user is?"></span>
	</div>
	
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.loggedin" ng-true-value="'1'">
		<div class="mcheckbox"></div>Logged-In</label>
	</div>

	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.notloggedin" ng-true-value="'1'">
		<div class="mcheckbox"></div>Not Logged-In</label>
	</div>

	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.commented" ng-true-value="'1'">
		<div class="mcheckbox"></div>Commented</label>
	</div>

	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.notcommented" ng-true-value="'1'">
		<div class="mcheckbox"></div>Not Commented</label>
	</div>
</div>

<div class="wpmca_item">
	<div class="itemhead">
		<h2>Referrer</h2>
		<span class="wpmcahint headhint" data-hint="Only a visitor from those selected website categories, can view the Lightbox/Slider"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.searchengine" ng-true-value="'1'">
		<div class="mcheckbox"></div>Search Engine</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.socialnet" ng-true-value="'1'">
		<div class="mcheckbox"></div>Social Networking</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.urlshort" ng-true-value="'1'">
		<div class="mcheckbox"></div>URL Shorteners</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.externurl" ng-true-value="'1'">
		<div class="mcheckbox"></div>External URL</label>
	</div>
	<div class="wpmca_group">
		<div class="wpmcapara">
			<textarea ng-model="data.externurls"></textarea>
		</div>
		Provide the urls separated by comma(,)
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>On Successful Subscription</h2>
		<span class="wpmcahint headhint" data-hint="What do on Successful Subscription?"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<input type="radio" value="suc_msg" ng-model="data.suc_sub">
	</div>
	<div class="wpmca_group p2 wpmcatxt suc_txt">
		<input type="text" class="wpmchimp_text" required ng-model="data.suc_msg"><span class="wpmcahint" data-hint="Enter a Message to Show Up"></span>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Success Message</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<input type="radio" value="suc_url" ng-model="data.suc_sub">
	</div>
	<div class="wpmca_group p2 wpmcatxt suc_txt">
		<input type="text" class="wpmchimp_text" required ng-model="data.suc_url"><span class="wpmcahint" data-hint="Enter a URL to redirect"></span>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Redirect to URL</label>
	</div>
	<div class="wpmca_group wpmcacb p3">
		<label><input type="checkbox" ng-true-value="'1'" ng-model="data.suc_url_tab">
		<div class="mcheckbox"></div>Open in new tab</label>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>User Sync</h2>
		<span class="wpmcahint headhint" data-hint="Sync users from Website"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-true-value="'1'" ng-model="data.usyn_com">
		<div class="mcheckbox"></div>Comment based Sync</label>
	</div>
	<div class="wpmca_group wpmc_dropc p2">
		<label>MailChimp List</label>
		<div class="wpmc_drop">
			<div class="wpmc_drop_head"><div>{{data.usyn_coml.name || (data.lists.length?'Select List':'No Lists')}}</div>
			<div class="bar"></div>
			</div>
			<div class="wpmc_drop_body">
			<div ng-repeat="list in data.lists" ng-click="data.usyn_coml = list">{{list.name}}</div>
			</div>
		</div>
	</div>
	<div class="wpmca_group wpmcacb p2" ng-show="data.usyn_com == 1">
		<label><input type="radio" value="1" ng-model="data.usyn_comp">
				With User's permission</label>
		<span class="wpmcahint" data-hint="Insert Checkbox near the Comment box"></span>
	</div>
	<div class="wpmca_group p3 wpmcatxt" ng-show="data.usyn_com == 1">
		<input type="text" class="wpmchimp_text" required ng-model="data.usyn_compt">
		<span class="wpmcahint" data-hint="Text for Checkbox"></span>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Permission Text</label>
	</div>
	<div class="wpmca_group wpmcacb p2" ng-show="data.usyn_com == 1">
		<label><input type="radio" value="0" ng-model="data.usyn_comp">
				Without User's permission</label>
		<span class="wpmcahint" data-hint="Add to list directly"></span>
	</div>
	<div class="wpmca_group">
			<button class="wpmca_button green material-design wpmc_usync" ng-click="wpmc_usync('wpmchimpa_syncom',data.usyn_coml.id)">Sync Existing</button>
		<span class="wpmcahint" data-hint="Sync currently commented users to list"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-true-value="'1'" ng-model="data.usyn_reg">
		<div class="mcheckbox"></div>Registration based Sync</label>
	</div>
	<div class="wpmca_group wpmc_dropc p2">
		<label>MailChimp List</label>
		<div class="wpmc_drop">
			<div class="wpmc_drop_head"><div>{{data.usyn_regl.name || (data.lists.length?'Select List':'No Lists')}}</div>
			<div class="bar"></div>
			</div>
			<div class="wpmc_drop_body">
			<div ng-repeat="list in data.lists" ng-click="data.usyn_regl = list">{{list.name}}</div>
			</div>
		</div>
	</div>
	<div class="wpmca_group wpmcacb p2" ng-show="data.usyn_reg == 1">
		<label><input type="radio" value="1" ng-model="data.usyn_regp">
				With User's permission</label>
		<span class="wpmcahint" data-hint="Insert Checkbox near the Sign-up box"></span>
	</div>
	<div class="wpmca_group p3 wpmcatxt" ng-show="data.usyn_reg == 1">
		<input type="text" class="wpmchimp_text" required ng-model="data.usyn_regpt">
		<span class="wpmcahint" data-hint="Text for Checkbox"></span>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Permission Text</label>
	</div>
	<div class="wpmca_group wpmcacb p2" ng-show="data.usyn_reg == 1">
		<label><input type="radio" value="0" ng-model="data.usyn_regp">
				Without User's permission</label>
		<span class="wpmcahint" data-hint="Add to list directly"></span>
	</div>
	<div class="wpmca_group p2">
		<select id="usync_role" ng-model="data.usync_role" ng-multi-select multiple="multiple" ng-multi-select-placeholder="User roles" ng-multi-select-filter="false" ng-multi-select-width="300px">
<?php
global $wp_roles;
$all_roles = $wp_roles->roles;
foreach ($all_roles as $key => $value) {
echo '<option value="'.$key.'">'.$value['name'].'</option>';
} ?>
	</select>
	</div>
	<div class="wpmca_group">
			<button class="wpmca_button green material-design wpmc_usync" ng-click="wpmc_usync('wpmchimpa_synreg',data.usyn_regl.id,data.usync_role)">Sync Existing</button>
		<span class="wpmcahint" data-hint="Sync currently registered users to list"></span>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Woocommerce Integration</h2>
		<span class="wpmcahint headhint" data-hint="Sync your customers on Check-out"></span>
	</div>
	<div class="wpmca_group">
		<div class="paper-toggle">
			<input type="checkbox" id="woocom_en" ng-model="data.woocom" ng-true-value="'1'" class="wpmcatoggle"/>
			<label for="woocom_en">Enable</label>
		</div>
		<span class="wpmcahint" data-hint="Enable Woocommerce Integration"></span>
	</div>

	<div class="wpmca_group wpmcacb p2" ng-show="data.woocom == 1">
		<label><input type="radio" value="1" ng-model="data.woocom_type">
				With User's permission</label>
		<span class="wpmcahint" data-hint="Insert Checkbox near the Check-out box"></span>
	</div>
	<div class="wpmca_group wpmcacb p2" ng-show="data.woocom == 1">
		<label><input type="radio" value="0" ng-model="data.woocom_type">
				Without User's permission</label>
		<span class="wpmcahint" data-hint="Add to list directly on Check-out"></span>
	</div>
	<div class="wpmca_group p3" ng-show="data.woocom == 1">
		<label>Subscribe on</label>
		<select class="wpmca_sel" style="width: 150px;" ng-model="data.woocom_on">
			<option value="0">Order Completed</option>
			<option value="1">Payment Recieved</option>
			<option value="2">Order Placed</option>
		</select>
	</div>
	<div class="wpmca_group wpmc_dropc p3" ng-show="data.woocom == 1">
		<label>MailChimp List</label>
		<div class="wpmc_drop">
			<div class="wpmc_drop_head"><div>{{data.woocom_list.name || (data.lists.length?'Select List':'No Lists')}}</div>
			<div class="bar"></div>
			</div>
			<div class="wpmc_drop_body">
			<div ng-repeat="list in data.lists" ng-click="data.woocom_list = list">{{list.name}}</div>
			</div>
		</div>
	</div>
	<div class="wpmca_group p3 wpmcatxt" ng-show="data.woocom_type == 1 && data.woocom == 1">
		<input type="text" class="wpmchimp_text" required ng-model="data.woocom_pert">
		<span class="wpmcahint" data-hint="Text for Checkbox"></span>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Permission Text</label>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>News and Updates</h2>
		<span class="wpmcahint headhint" data-hint="Get Product Update &amp; News. It's secure and spam free..."></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label> <input type="checkbox" ng-model="data.get_email_update" ng-true-value="'1'">  
		<div class="mcheckbox"></div>Get Email Updates</label>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" required ng-model="data.email_update">
		<span class="bar"></span>
		<label>Email Address</label>
	</div>
</div>
<?php
	break;
	case 'lightbox':
?>
<div class="wpmca_item litehead simghead">
	<div class="itemhead">
		<h2>Subscribe box in Lightbox</h2>
	</div>
	<div class="wpmca_group">
		<div class="paper-toggle">
			<input type="checkbox" id="litebox_en" ng-model="data.litebox" ng-true-value="'1'" class="wpmcatoggle"/>
			<label for="litebox_en">Enable</label>
		</div>
		<span class="wpmcahint" data-hint="Enable Lightbox"></span>
	</div>
	<div class="wpmca_group wpmc_dropc">
		<label>Custom Form</label>
		<div class="wpmc_drop">
			<div class="wpmc_drop_head"><div>{{getformbyid(data.lite_form).name || (data.cforms.length?'Select Form':'No Forms')}}</div>
			<div class="bar"></div>
			</div>
			<div class="wpmc_drop_body">
			<div ng-repeat="form in data.cforms" ng-click="data.lite_form = form.id">{{form.name}}</div>
			</div>
		</div>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Select Theme</h2>
		<span class="wpmcahint headhint" data-hint="Select a theme for Lightbox"></span>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel" ng-change="themeswitcher('lightbox')" style="width: 260px;" ng-model="data.litebox_theme">
			<option value="4">Smash</option>
			<option value="2">Material</option>
			<option value="7">Material Lite</option>
			<option value="3">Onamy</option>
			<option value="6">Unidesign</option>
			<option value="5">Glow</option>
			<option value="1">Epsilon</option>
			<option value="8">Nova</option>
			<option value="9">Leo</option>
			<option value="0">Basic</option>
		</select>
	</div>
	<div class="wpmca_group">
		<button class="wpmca_button orange material-design wpmca_vupre" ng-click="vupre($event,data.litebox_theme)">Live Editor</button>
	</div>
</div>
<div class="wpmca_prev livelightbox">
<div class="wpmca_topbar">
<div class="wpmca_round" style="background:#f67a00"></div><div class="wpmca_round" style="background:#ebc71f"></div><div class="wpmca_round" style="background:#31bb37"></div><div class="wpmca_left"></div><div class="wpmca_right"></div><div class="wpmca_long"></div><div class="wpmca_search"></div><div class="wpmca_opts"></div>
</div>
<div class="wpmca_viewportbck">
<div class="wpmca_lineimg"></div>
<div class="wpmca_divide" style="left:33%"></div>
<div class="wpmca_divide" style="left:66%"></div>
<div ng-repeat="i in fontsiz.slice(0, 2)" class="wpmca_linecont">
	<div ng-repeat="i in fontsiz.slice(0, 10)" class="wpmca_line"></div></div>
</div>
<div class="wpmca_viewport"></div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Custom Message</h2>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['l'+data.litebox_theme].lite_heading">
		<span class="wpmcahint" data-hint="Heading for the Lightbox"></span>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Heading</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['l'+data.litebox_theme].lite_heading_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['l'+data.litebox_theme].lite_heading_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['l'+data.litebox_theme].lite_heading_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['l'+data.litebox_theme].lite_heading_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_heading_fc"/>
	</div>
	<div class="wpmca_group"> 
		<div class="wpmcapara">Message
			<span class="wpmcahint" data-hint="Message for the Lightbox"></span>
		</div>
		<ng-quill-editor ng-model="data.theme['l'+data.litebox_theme].lite_msg" toolbar="true" link-tooltip="true" image-tooltip="true" toolbar-entries="bold list bullet italic underline strike align color background link image"></ng-quill-editor>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['l'+data.litebox_theme].lite_msg_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['l'+data.litebox_theme].lite_msg_fs" ng-options="f for f in fontsiz track by f">
			<option value="">Size</option>
		</select>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Text Box</h2>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['l'+data.litebox_theme].lite_tbox_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['l'+data.litebox_theme].lite_tbox_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['l'+data.litebox_theme].lite_tbox_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['l'+data.litebox_theme].lite_tbox_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_tbox_fc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_tbox_bgc"/>
	</div>
	<div class="wpmca_group wpmcatxts">      
		<label>Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['l'+data.litebox_theme].lite_tbox_w">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Height</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['l'+data.litebox_theme].lite_tbox_h">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['l'+data.litebox_theme].lite_tbox_bor">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_tbox_borc"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Checkbox/Radio</h2>
	</div>

	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Checkmark</label>
		<div class="wpmca_compac p1">
			<input id="lcm1" type="radio" value="ch1" ng-model="data.theme['l'+data.litebox_theme].lite_check_mark">
			<label for="lcm1">Graphic 1<div class="checkbdemo cicon ch1"></div></label>
		</div>
		<div class="wpmca_compac">
			<input id="lcm2" type="radio" value="ch2" ng-model="data.theme['l'+data.litebox_theme].lite_check_mark">
			<label for="lcm2">Graphic 2<div class="checkbdemo cicon ch2"></div></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="lcm3" type="radio" value="ch3" ng-model="data.theme['l'+data.litebox_theme].lite_check_mark">
			<label for="lcm3">Graphic 3<div class="checkbdemo cicon ch3"></div></label> 
		</div>
		<div class="wpmca_compac">
			<input id="lcm4" type="radio" value="ch4" ng-model="data.theme['l'+data.litebox_theme].lite_check_mark">
			<label for="lcm4">Graphic 4<div class="checkbdemo cicon ch4"></div></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="lcm5" type="radio" value="ch5" ng-model="data.theme['l'+data.litebox_theme].lite_check_mark">
			<label for="lcm5">Graphic 5<div class="checkbdemo cicon ch5"></div></label> 
		</div>
		<div class="wpmca_compac">
			<input id="lcm6" type="radio" value="ch6" ng-model="data.theme['l'+data.litebox_theme].lite_check_mark">
			<label for="lcm6">Graphic 6<div class="checkbdemo cicon ch6"></div></label> 
		</div>
		<div style="clear:both"></div>
</div>

	<div class="wpmca_group wpmcsingsel">
		<label class="wpmcapara"> Maximum Options per Line</label>
		<select class="wpmca_sel" ng-model="data.theme['l'+data.litebox_theme].lite_check_pline" >
			<option value="">Theme Default</option>
			<option value="1">1 Column</option>
			<option value="2">2 Column</option>
			<option value="3">3 Column</option>
			<option value="4">4 Column</option>
			<option value="f">Flexible Layout</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Selected option Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_check_ic"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Theme Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_check_c"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_check_borc"/>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['l'+data.litebox_theme].lite_check_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['l'+data.litebox_theme].lite_check_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['l'+data.litebox_theme].lite_check_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['l'+data.litebox_theme].lite_check_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_check_fc"/>
	</div>
</div>
<div class="wpmca_item" ng-hide="data.litebox_theme == 5">
	<div class="itemhead">
			<h2>Personalize your Button</h2>
	</div>
	<div class="wpmca_group wpmcatxt"> 
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['l'+data.litebox_theme].lite_button">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Button Text</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['l'+data.litebox_theme].lite_button_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['l'+data.litebox_theme].lite_button_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['l'+data.litebox_theme].lite_button_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['l'+data.litebox_theme].lite_button_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_button_fc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Hover Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_button_fch"/>
	</div>
	<div class="wpmca_group wpmcatxts">      
		<label>Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['l'+data.litebox_theme].lite_button_w">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Height</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['l'+data.litebox_theme].lite_button_h">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_button_bc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Hover Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_button_bch"/>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Radius</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['l'+data.litebox_theme].lite_button_br">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['l'+data.litebox_theme].lite_button_bor">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_button_borc"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
			<h2>Personalize your Spinner</h2>
	</div>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Spinner</label>
		<div class="wpmca_compac p1">
			<input id="lsp1" type="radio" value="1" ng-model="data.theme['l'+data.litebox_theme].lite_spinner_t">
			<label for="lsp1" class="spindemo" ng-bind-html="getSpin('1')"></label>
		</div>
		<div class="wpmca_compac">
			<input id="lsp2" type="radio" value="2" ng-model="data.theme['l'+data.litebox_theme].lite_spinner_t">
			<label for="lsp2" class="spindemo" ng-bind-html="getSpin('2')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="lsp3" type="radio" value="3" ng-model="data.theme['l'+data.litebox_theme].lite_spinner_t">
			<label for="lsp3" class="spindemo" ng-bind-html="getSpin('3')"></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="lsp4" type="radio" value="4" ng-model="data.theme['l'+data.litebox_theme].lite_spinner_t">
			<label for="lsp4" class="spindemo" ng-bind-html="getSpin('4')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="lsp5" type="radio" value="5" ng-model="data.theme['l'+data.litebox_theme].lite_spinner_t">
			<label for="lsp5" class="spindemo" ng-bind-html="getSpin('5')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="lsp6" type="radio" value="6" ng-model="data.theme['l'+data.litebox_theme].lite_spinner_t">
			<label for="lsp6" class="spindemo" ng-bind-html="getSpin('6')"></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="lsp7" type="radio" value="7" ng-model="data.theme['l'+data.litebox_theme].lite_spinner_t">
			<label for="lsp7" class="spindemo" ng-bind-html="getSpin('7')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="lsp8" type="radio" value="8" ng-model="data.theme['l'+data.litebox_theme].lite_spinner_t">
			<label for="lsp8" class="spindemo" ng-bind-html="getSpin('8')"></label> 
		</div>
		<div style="clear:both"></div>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Theme Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_spinner_c"/>
	</div>
</div>

<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Status Message</h2>
		<span class="wpmcahint headhint" data-hint="Customize your Success or Error Message"></span>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['l'+data.litebox_theme].lite_status_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['l'+data.litebox_theme].lite_status_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['l'+data.litebox_theme].lite_status_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['l'+data.litebox_theme].lite_status_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_status_fc"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Tag</h2>
		<span class="wpmcahint headhint" data-hint="Customize your Tag"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['l'+data.litebox_theme].lite_tag_en">  
		<div class="mcheckbox"></div>Enable</label>
	</div>              
	<div class="wpmca_group wpmcatxt"> 
		<input type="text" class="wpmchimp_text" spellcheck="false" required  ng-model="data.theme['l'+data.litebox_theme].lite_tag">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Tag Text</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['l'+data.litebox_theme].lite_tag_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['l'+data.litebox_theme].lite_tag_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['l'+data.litebox_theme].lite_tag_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['l'+data.litebox_theme].lite_tag_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_tag_fc"/>
	</div>
</div>


<div class="wpmca_item extra_opts">
<div class="itemhead">
<h2>Additional Theme Options</h2>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['1','2','3','4','6','7','8','9'].indexOf(data.litebox_theme) != -1">
<label>Close Button Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_close_col"/>
</div>  
<div class="wpmca_group wpmcarange">
<label>Background Opacity</label>
<input type="range" min="0" max="100" class="wpmchimp-range-sel" ng-model="data.theme['l'+data.litebox_theme].lite_bg_op">
</div>
<div class="wpmca_group wpmcacb" ng-show="['1'].indexOf(data.litebox_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['l'+data.litebox_theme].lite_dislogo">  
<div class="mcheckbox"></div>Disable Logo Head</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['2','3','4','5','6'].indexOf(data.litebox_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['l'+data.litebox_theme].lite_disimg">  
<div class="mcheckbox"></div>Disable Image/Video Head</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.litebox_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['l'+data.litebox_theme].lite_exhead">  
<div class="mcheckbox"></div>Disable Extra Head</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.litebox_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['l'+data.litebox_theme].lite_dissoc">  
<div class="mcheckbox"></div>Disable Social Buttons</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['1','2','3','4','5','6','7'].indexOf(data.litebox_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['l'+data.litebox_theme].lite_img1">
<button class="wpmca_button green material-design wpmc_media_uploader">Select Image</button>
<span class="wpmcahint" data-hint="Upload Image or Enter base64 of image with dimension {{idim('l',data.litebox_theme)}}(px)"></span>
<span class="highlighter"></span>
<span class="bar"></span>
<label>Featured Image URL</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['6'].indexOf(data.litebox_theme) != -1">
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['l'+data.litebox_theme].lite_vid1">
<span class="wpmcahint" data-hint="YouTube/Vimeo/DailyMotion URL"></span>
<span class="highlighter"></span>
<span class="bar"></span>
<label>Featured Video URL</label>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['1'].indexOf(data.litebox_theme) != -1">
<label>Head Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_head_col"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['1'].indexOf(data.litebox_theme) != -1">
<label>Head Shadow Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_hshad_col"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['1','2','3','4','5','6','7','8','9'].indexOf(data.litebox_theme) != -1">
<label>Popup Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_bg_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['2'].indexOf(data.litebox_theme) != -1">
<label>Header Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_hbg_c"/>
</div>
<div class="wpmca_group wpmcatxts" ng-show="['7'].indexOf(data.litebox_theme) != -1">      
<label>Header Blur</label>
<input type="text" class="wpmchimp_texts" ng-model="data.theme['l'+data.litebox_theme].lite_hblur">
<span>px</span>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['2','7'].indexOf(data.litebox_theme) != -1">
<label>Header Icon</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_hi_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.litebox_theme) != -1">
<label>Header Icon Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_hi_bc"/>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.litebox_theme) != -1">
<input id="lite_exhopt1" type="radio" value="0" ng-model="data.theme['l'+data.litebox_theme].lite_exhopt"> 
<label for="lite_exhopt1">Utility Extra Head</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.litebox_theme) != -1">
<input id="lite_exhopt2" type="radio" value="1" ng-model="data.theme['l'+data.litebox_theme].lite_exhopt"> 
<label for="lite_exhopt2">Paragraph Extra Head</label>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.litebox_theme) != -1">
<label>Extra Head Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_exhbc"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.litebox_theme) != -1">
<label>Extra Head Font Color 1</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_exhc1"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.litebox_theme) != -1">
<label>Extra Head Font Color 2</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_exhc2"/>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.litebox_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['l'+data.litebox_theme].lite_locapi">
<span class="highlighter"></span>
<span class="bar"></span>
<label>OpenWeatherMap API Key</label>
<span style="margin: 5px;">Click <a href="http://openweathermap.org/appid" style="display:inline-block" target="_blank">here</a> to get your OpenWeatherMap API</span>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.litebox_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['l'+data.litebox_theme].lite_wloc">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Location for Weather</label>
<span style="float: left;margin: 5px;">ex : London,UK</span><a href="http://openweathermap.org/find?q={{data.theme['l'+data.litebox_theme].lite_wloc}}" target="_blank">Find your city</a>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.litebox_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['l'+data.litebox_theme].lite_exhp">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Extra Head Paragraph</label>
</div>
<div class="wpmca_group" ng-show="['7'].indexOf(data.litebox_theme) != -1">
<select class="wpmca_sel google_fonts" ng-model="data.theme['l'+data.litebox_theme].lite_exhf" ng-options="f for f in fonts track by f">
<option value="">Font</option>
</select>
<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['l'+data.litebox_theme].lite_exhfw">
<option value="">Weight</option>
<option value="normal">Normal</option>
<option value="bold">Bold</option>
<option value="lighter">Lighter</option>
<option value="bolder">Bolder</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="300">300</option>
<option value="400">400</option>
<option value="500">500</option>
<option value="600">600</option>
<option value="700">700</option>
<option value="800">800</option>
<option value="900">900</option>
</select>
<select class="wpmca_sel google_fonts_style" ng-model="data.theme['l'+data.litebox_theme].lite_exhfst">
<option value="">Style</option>
<option value="normal">Normal</option>
<option value="italic">Italic</option>
<option value="oblique">oblique</option>
</select>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.litebox_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['l'+data.litebox_theme].lite_l2owm">  
<div class="mcheckbox"></div>Link to OpenWeatherMap</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.litebox_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['l'+data.litebox_theme].lite_soc_head">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Social Buttons Header</label>
</div>
<div class="wpmca_group" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.litebox_theme) != -1">
<select class="wpmca_sel google_fonts" ng-model="data.theme['l'+data.litebox_theme].lite_soc_f" ng-options="f for f in fonts track by f">
<option value="">Font</option>
</select>
<select class="wpmca_sel google_fonts_size" ng-model="data.theme['l'+data.litebox_theme].lite_soc_fs" ng-options="f for f in fontsiz track by f">
<option value="">Size</option>
</select>
<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['l'+data.litebox_theme].lite_soc_fw">
<option value="">Weight</option>
<option value="normal">Normal</option>
<option value="bold">Bold</option>
<option value="lighter">Lighter</option>
<option value="bolder">Bolder</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="300">300</option>
<option value="400">400</option>
<option value="500">500</option>
<option value="600">600</option>
<option value="700">700</option>
<option value="800">800</option>
<option value="900">900</option>
</select>
<select class="wpmca_sel google_fonts_style" ng-model="data.theme['l'+data.litebox_theme].lite_soc_fst">
<option value="">Style</option>
<option value="normal">Normal</option>
<option value="italic">Italic</option>
<option value="oblique">oblique</option>
</select>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.litebox_theme) != -1">
<label>Social Buttons Header Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_soc_fc"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.litebox_theme) != -1">
<label>Social Bar Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_soc_bc"/>
</div>
<div class="wpmca_group wpmc_dropc ico_sel">
	<label>Submit Icon</label>
	<div class="wpmc_drop">
		<div class="wpmc_drop_head"><div ng-class="data.theme['l'+data.litebox_theme].lite_button_i"></div>
			<div class="bar"></div>
		</div>
		<div class="wpmc_drop_body">
			<div class="longcell inone" ng-click="data.theme['l'+data.litebox_theme].lite_button_i='inone'" ng-class="{'drop-sel': data.theme['l'+data.litebox_theme].lite_button_i=='inone' }"></div>
			<div class="longcell idef" ng-click="data.theme['l'+data.litebox_theme].lite_button_i='idef'" ng-class="{'drop-sel': data.theme['l'+data.litebox_theme].lite_button_i=='idef' }"></div>
			<div ng-repeat="(k, v) in icons" ng-click="data.theme['l'+data.litebox_theme].lite_button_i=k" class="{{k}}" ng-class="{'drop-sel': k == data.theme['l'+data.litebox_theme].lite_button_i }"></div>
		</div>
	</div>
</div>
<div class="wpmca_group wpmcacolor">
<label>Icon Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_inico_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.litebox_theme) != -1">
<label>Glow 1 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_glw1_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.litebox_theme!='5'}">
<label>Glow 1 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['l'+data.litebox_theme].lite_glw1_b">
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.litebox_theme) != -1">
<label>Glow 2 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_glw2_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.litebox_theme!='5'}">
<label>Glow 2 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['l'+data.litebox_theme].lite_glw2_b">
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.litebox_theme) != -1">
<label>Glow 3 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['l'+data.litebox_theme].lite_glw3_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.litebox_theme!='5'}">
<label>Glow 3 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['l'+data.litebox_theme].lite_glw3_b">
</div>
</div>


<div class="wpmca_item">
	<div class="itemhead">
		<h2>Filter by Device</h2>
		<span class="wpmcahint headhint" data-hint="Show Subscription form if the user visits from?"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_desktop" ng-true-value="'1'">  
		<div class="mcheckbox"></div>Desktop</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_tablet" ng-true-value="'1'">  
		<div class="mcheckbox"></div>Tablet</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_mobile" ng-true-value="'1'">  
		<div class="mcheckbox"></div>Mobile</label>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Filter by Page type</h2>
		<span class="wpmcahint headhint" data-hint="Show Subscription form if the user visits?"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_homepage" ng-true-value="'1'">
		<div class="mcheckbox"></div>Home Page</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_blog" ng-true-value="'1'">
		<div class="mcheckbox"></div>Blog Page</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_page" ng-true-value="'1'">
		<div class="mcheckbox"></div>Pages</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_post" ng-true-value="'1'">
		<div class="mcheckbox"></div>Posts</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_category" ng-true-value="'1'">
		<div class="mcheckbox"></div>Categories/Archives</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_search" ng-true-value="'1'">
		<div class="mcheckbox"></div>Search</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_404error" ng-true-value="'1'">
		<div class="mcheckbox"></div>404 Error</label>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Filter by Specific Posts</h2>
		<span class="wpmcahint headhint" data-hint="Include/Exclude Specific posts from Lightbox"></span>
	</div>
	<div class="wpmca_group togdouble">
		<div class="paper-toggle">
			<input id="lite_spec_post" type="checkbox" class="wpmcatoggle" ng-model="data.lite_excl" ng-true-value="'1'">
			<label for="lite_spec_post">Exclude</label>
		</div><label for="lite_spec_post" style="top: -4px;left: 60px;position: relative;">Include</label>
	</div>
	<div class="wpmca_group">
		<div class="wpmcapara"> Enter Post/Page IDs
			<span class="wpmcahint" data-hint="Separate post ids by comma ','"></span>
		</div>
	</div>
	<div class="wpmca_group">
		<div class="wpmcapara"><textarea ng-model="data.lite_excl_id"></textarea></div>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Behaviour</h2>
		<span class="wpmcahint headhint" data-hint="Adjust the behaviour"></span>
	</div>
	<div class="wpmca_group">
		<style type="text/css">
			.animin {-webkit-animation-duration: {{lite_demo_dur||1}}s; animation-duration: {{lite_demo_dur||1}}s;}/**/
		</style>
		<div class="animr">
		</div>
		<div class="animout">
			<div class="animin"></div>
		</div>
	</div>
	<div class="wpmca_group">
	<div class="wpmcapara"> Entrance Animation</div>
		<select class="wpmca_sel" style="width: 260px;" ng-model="data.lite_behave_anim" >
			<option value="">None</option>
			<optgroup label="Bouncing">
				<option value="bounceIn">bounceIn</option>
				<option value="bounceInDown">bounceInDown</option>
				<option value="bounceInLeft">bounceInLeft</option>
				<option value="bounceInRight">bounceInRight</option>
				<option value="bounceInUp">bounceInUp</option>
			</optgroup>

			<optgroup label="Fading">
				<option value="fadeIn">fadeIn</option>
				<option value="fadeInDown">fadeInDown</option>
				<option value="fadeInDownBig">fadeInDownBig</option>
				<option value="fadeInLeft">fadeInLeft</option>
				<option value="fadeInLeftBig">fadeInLeftBig</option>
				<option value="fadeInRight">fadeInRight</option>
				<option value="fadeInRightBig">fadeInRightBig</option>
				<option value="fadeInUp">fadeInUp</option>
				<option value="fadeInUpBig">fadeInUpBig</option>
			</optgroup>

			<optgroup label="Rotating ">
				<option value="rotateIn">rotateIn</option>
				<option value="rotateInDownLeft">rotateInDownLeft</option>
				<option value="rotateInDownRight">rotateInDownRight</option>
				<option value="rotateInUpLeft">rotateInUpLeft</option>
				<option value="rotateInUpRight">rotateInUpRight</option>
			</optgroup>

			<optgroup label="Sliding Entrances">
				<option value="slideInUp">slideInUp</option>
				<option value="slideInDown">slideInDown</option>
				<option value="slideInLeft">slideInLeft</option>
				<option value="slideInRight">slideInRight</option>
			
			<optgroup label="Zoom Entrances">
				<option value="zoomIn">zoomIn</option>
				<option value="zoomInDown">zoomInDown</option>
				<option value="zoomInLeft">zoomInLeft</option>
				<option value="zoomInRight">zoomInRight</option>
				<option value="zoomInUp">zoomInUp</option>
			</optgroup>
			
			<optgroup label="Specials">
				<option value="rollIn">rollIn</option>
				<option value="lightSpeedIn">lightSpeedIn</option>
			</optgroup>
		</select>
		<label>duration</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.lite_behave_animdur">
		<span>seconds</span>
	</div>
	<div class="wpmca_group">
	<div class="wpmcapara"> Exit Animation</div>
		<select class="wpmca_sel" style="width: 260px;" ng-model="data.lite_behave_animo">
			<option value="">None</option>
			<optgroup label="Bouncing Exits">
				<option value="bounceOut">bounceOut</option>
				<option value="bounceOutDown">bounceOutDown</option>
				<option value="bounceOutLeft">bounceOutLeft</option>
				<option value="bounceOutRight">bounceOutRight</option>
				<option value="bounceOutUp">bounceOutUp</option>
			</optgroup>

			<optgroup label="Fading Exits">
				<option value="fadeOut">fadeOut</option>
				<option value="fadeOutDown">fadeOutDown</option>
				<option value="fadeOutDownBig">fadeOutDownBig</option>
				<option value="fadeOutLeft">fadeOutLeft</option>
				<option value="fadeOutLeftBig">fadeOutLeftBig</option>
				<option value="fadeOutRight">fadeOutRight</option>
				<option value="fadeOutRightBig">fadeOutRightBig</option>
				<option value="fadeOutUp">fadeOutUp</option>
				<option value="fadeOutUpBig">fadeOutUpBig</option>
			</optgroup>

			<optgroup label="Rotating Exits">
				<option value="rotateOut">rotateOut</option>
				<option value="rotateOutDownLeft">rotateOutDownLeft</option>
				<option value="rotateOutDownRight">rotateOutDownRight</option>
				<option value="rotateOutUpLeft">rotateOutUpLeft</option>
				<option value="rotateOutUpRight">rotateOutUpRight</option>
			</optgroup>

			<optgroup label="Sliding Exits">
				<option value="slideOutUp">slideOutUp</option>
				<option value="slideOutDown">slideOutDown</option>
				<option value="slideOutLeft">slideOutLeft</option>
				<option value="slideOutRight">slideOutRight</option>
			</optgroup>

			<optgroup label="Zoom Exits">
				<option value="zoomOut">zoomOut</option>
				<option value="zoomOutDown">zoomOutDown</option>
				<option value="zoomOutLeft">zoomOutLeft</option>
				<option value="zoomOutRight">zoomOutRight</option>
				<option value="zoomOutUp">zoomOutUp</option>
			</optgroup>

			<optgroup label="Specials">
				<option value="rollOut">rollOut</option>
				<option value="lightSpeedOut">lightSpeedOut</option>
			</optgroup>
		</select>
		<label>duration</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.lite_behave_animodur">
		<span>seconds</span>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb"> 
		<label>Appear after</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.lite_behave_time">
		<span>seconds</span>
		<label><input type="checkbox" style="margin-left: 10px;" ng-model="data.lite_behave_time_inac" ng-true-value="'1'">
		<div class="mcheckbox"></div>of Inactivity</label>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb"> 
		<label><input type="checkbox" ng-model="data.lite_behave_scroll" ng-true-value="'1'">
		<div class="mcheckbox"></div>Appear after</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.lite_behave_scrollp">
		<span>% of the page scrolled</span>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_behave_depart" ng-true-value="'1'">
		<div class="mcheckbox"></div>Depart Intent</label>
		<span style="margin-left: 5px;">activated after</span>
		<input type="text" class="wpmchimp_texts" ng-model="data.lite_behave_departs">
		<span>seconds time delay</span>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb"> 
		<label><input type="checkbox" ng-model="data.lite_behave_cookie" ng-true-value="'1'">
		<div class="mcheckbox"></div>Reappear after</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.lite_behave_cookied">
		<span>day using Cookie</span>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb"> 
		<label><input type="checkbox" ng-model="data.lite_behave_scookie" ng-true-value="'1'">
		<div class="mcheckbox"></div>Disappear if subscribed(using Cookie)</label>
	</div>
	<div class="wpmca_group wpmcacb wpmcatxts ">
		<label><input type="checkbox" ng-true-value="'1'" ng-model="data.lite_behave_onclk">
		<div class="mcheckbox"></div>Enable Open-on-Click</label>
		<span class="wpmcahint" data-hint="Open lightbox on click an button/link"></span>
		<div class="p3">Use class 'chimpmate-lightbox' in button/'#chimpmate-lightbox' as link</div>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Close action</h2>
		<span class="wpmcahint headhint" data-hint="When to close the lightbox"></span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Disappear after</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.lite_close_time">
		<span>seconds of inactivity</span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.lite_close_bck" ng-true-value="'1'">
		<div class="mcheckbox"></div>Close when Lightbox background is clicked</label>
		<span class="wpmcahint" data-hint="If not selected, visitors need to click close button to exit the lightbox"></span>
	</div>
</div>

<?php
	break;
	case 'slider':
?>
<div class="wpmca_item slihead simghead">
	<div class="itemhead">
		<h2>Subscribe box in Slider</h2>
	</div>
	<div class="wpmca_group">
		<div class="paper-toggle">
			<input type="checkbox" id="slider_en" ng-model="data.slider" ng-true-value="'1'" class="wpmcatoggle">
			<label for="slider_en">Enable</label>
		</div>
		<span class="wpmcahint" data-hint="Enable Slider"></span>
	</div>
	<div class="wpmca_group wpmc_dropc">
		<label>Custom Form</label>
		<div class="wpmc_drop">
			<div class="wpmc_drop_head"><div>{{getformbyid(data.slider_form).name || (data.cforms.length?'Select Form':'No Forms')}}</div>
			<div class="bar"></div>
			</div>
			<div class="wpmc_drop_body">
			<div ng-repeat="form in data.cforms" ng-click="data.slider_form = form.id">{{form.name}}</div>
			</div>
		</div>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Select Theme</h2>
		<span class="wpmcahint headhint" data-hint="Select a theme for Slider"></span>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel" ng-change="themeswitcher('slider')" style="width: 260px;" ng-model="data.slider_theme">
			<option value="4">Smash</option>
			<option value="2">Material</option>
			<option value="7">Material Lite</option>
			<option value="3">Onamy</option>
			<option value="6">Unidesign</option>
			<option value="5">Glow</option>
			<option value="1">Epsilon</option>
			<option value="8">Nova</option>
			<option value="9">Leo</option>
			<option value="0">Basic</option>
		</select>
	</div>
	<div class="wpmca_group">
		<button class="wpmca_button orange material-design wpmca_vupre" ng-click="vupre($event,data.slider_theme)">Live Editor</button>
	</div>
</div>
<div class="wpmca_prev liveslider">
<div class="wpmca_topbar">
<div class="wpmca_round" style="background:#f67a00"></div><div class="wpmca_round" style="background:#ebc71f"></div><div class="wpmca_round" style="background:#31bb37"></div><div class="wpmca_left"></div><div class="wpmca_right"></div><div class="wpmca_long"></div><div class="wpmca_search"></div><div class="wpmca_opts"></div>
</div>
<div class="wpmca_viewportbck">
<div class="wpmca_lineimg"></div>
<div class="wpmca_divide" style="left:33%"></div>
<div class="wpmca_divide" style="left:66%"></div>
<div ng-repeat="i in fontsiz.slice(0, 2)" class="wpmca_linecont">
	<div ng-repeat="i in fontsiz.slice(0, 10)" class="wpmca_line"></div></div>
</div>
<div class="wpmca_viewport"></div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
			<h2>Custom Message</h2>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['s'+data.slider_theme].slider_heading">
		<span class="wpmcahint" data-hint="Heading for the Slider"></span>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Heading</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['s'+data.slider_theme].slider_heading_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['s'+data.slider_theme].slider_heading_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['s'+data.slider_theme].slider_heading_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['s'+data.slider_theme].slider_heading_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
			<label>Font Color</label>
			<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_heading_fc"/>
	</div>
	<div class="wpmca_group"> 
		<div class="wpmcapara">Message
				<span class="wpmcahint" data-hint="Message for the Slider"></span>
		</div>
		<ng-quill-editor ng-model="data.theme['s'+data.slider_theme].slider_msg" toolbar="true" link-tooltip="true" image-tooltip="true" toolbar-entries="bold list bullet italic underline strike align color background link image"></ng-quill-editor>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['s'+data.slider_theme].slider_msg_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['s'+data.slider_theme].slider_msg_fs" ng-options="f for f in fontsiz track by f">
			<option value="">Size</option>
		</select>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Text Box</h2>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['s'+data.slider_theme].slider_tbox_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['s'+data.slider_theme].slider_tbox_fs" ng-options="f for f in fontsiz track by f">
			<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['s'+data.slider_theme].slider_tbox_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['s'+data.slider_theme].slider_tbox_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_tbox_fc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_tbox_bgc"/>
	</div>
	<div class="wpmca_group wpmcatxts">      
		<label>Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['s'+data.slider_theme].slider_tbox_w">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Height</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['s'+data.slider_theme].slider_tbox_h">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['s'+data.slider_theme].slider_tbox_bor">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_tbox_borc"/> 
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Checkbox/Radio</h2>
	</div>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Checkmark</label>
		<div class="wpmca_compac p1">
			<input id="scm1" type="radio" value="ch1" ng-model="data.theme['s'+data.slider_theme].slider_check_mark">
			<label for="scm1">Graphic 1 <div class="checkbdemo cicon ch1"></div></label>
		</div>
		<div class="wpmca_compac">
			<input id="scm2" type="radio" value="ch2" ng-model="data.theme['s'+data.slider_theme].slider_check_mark">
			<label for="scm2">Graphic 2 <div class="checkbdemo cicon ch2"></div></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="scm3" type="radio" value="ch3" ng-model="data.theme['s'+data.slider_theme].slider_check_mark">
			<label for="scm3">Graphic 3 <div class="checkbdemo cicon ch3"></div></label> 
		</div>
		<div class="wpmca_compac">
			<input id="scm4" type="radio" value="ch4" ng-model="data.theme['s'+data.slider_theme].slider_check_mark">
			<label for="scm4">Graphic 4 <div class="checkbdemo cicon ch4"></div></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="scm5" type="radio" value="ch5" ng-model="data.theme['s'+data.slider_theme].slider_check_mark">
			<label for="scm5">Graphic 5 <div class="checkbdemo cicon ch5"></div></label> 
		</div>
		<div class="wpmca_compac">
			<input id="scm6" type="radio" value="ch6" ng-model="data.theme['s'+data.slider_theme].slider_check_mark">
			<label for="scm6">Graphic 6 <div class="checkbdemo cicon ch6"></div></label> 
		</div>
		<div style="clear:both"></div>
 </div>
	<div class="wpmca_group wpmcsingsel">
		<label class="wpmcapara"> Maximum Options per Line</label>
		<select class="wpmca_sel" ng-model="data.theme['s'+data.slider_theme].slider_check_pline" >
			<option value="">Theme Default</option>
			<option value="1">1 Column</option>
			<option value="2">2 Column</option>
			<option value="3">3 Column</option>
			<option value="4">4 Column</option>
			<option value="f">Flexible Layout</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Selected option Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_check_ic"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Theme Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_check_c"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_check_borc"/>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['s'+data.slider_theme].slider_check_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['s'+data.slider_theme].slider_check_fs" ng-options="f for f in fontsiz track by f">
			<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['s'+data.slider_theme].slider_check_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
			<select class="wpmca_sel google_fonts_style" ng-model="data.theme['s'+data.slider_theme].slider_check_fst">
				<option value="">Style</option>
				<option value="normal">Normal</option>
				<option value="italic">Italic</option>
				<option value="oblique">oblique</option>
			</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_check_fc"/>
	</div>
</div>
<div class="wpmca_item" ng-hide="data.slider_theme == 5">
	<div class="itemhead">
			<h2>Personalize your Button</h2>
	</div>
	<div class="wpmca_group wpmcatxt"> 
		<input type="text" class="wpmchimp_text" spellcheck="false" required  ng-model="data.theme['s'+data.slider_theme].slider_button">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Button Text</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['s'+data.slider_theme].slider_button_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['s'+data.slider_theme].slider_button_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['s'+data.slider_theme].slider_button_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['s'+data.slider_theme].slider_button_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_button_fc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Hover Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_button_fch"/>
	</div>
	<div class="wpmca_group wpmcatxts">      
		<label>Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['s'+data.slider_theme].slider_button_w">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Height</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['s'+data.slider_theme].slider_button_h">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_button_bc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Hover Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_button_bch"/>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Radius</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['s'+data.slider_theme].slider_button_br">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['s'+data.slider_theme].slider_button_bor">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_button_borc"/>
	</div>
</div>

<div class="wpmca_item">
	<div class="itemhead">
			<h2>Personalize your Spinner</h2>
	</div>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Spinner</label>
		<div class="wpmca_compac p1">
			<input id="ssp1" type="radio" value="1" ng-model="data.theme['s'+data.slider_theme].slider_spinner_t">
			<label for="ssp1" class="spindemo" ng-bind-html="getSpin('1')"></label>
		</div>
		<div class="wpmca_compac">
			<input id="ssp2" type="radio" value="2" ng-model="data.theme['s'+data.slider_theme].slider_spinner_t">
			<label for="ssp2" class="spindemo" ng-bind-html="getSpin('2')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="ssp3" type="radio" value="3" ng-model="data.theme['s'+data.slider_theme].slider_spinner_t">
			<label for="ssp3" class="spindemo" ng-bind-html="getSpin('3')"></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="ssp4" type="radio" value="4" ng-model="data.theme['s'+data.slider_theme].slider_spinner_t">
			<label for="ssp4" class="spindemo" ng-bind-html="getSpin('4')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="ssp5" type="radio" value="5" ng-model="data.theme['s'+data.slider_theme].slider_spinner_t">
			<label for="ssp5" class="spindemo" ng-bind-html="getSpin('5')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="ssp6" type="radio" value="6" ng-model="data.theme['s'+data.slider_theme].slider_spinner_t">
			<label for="ssp6" class="spindemo" ng-bind-html="getSpin('6')"></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="ssp7" type="radio" value="7" ng-model="data.theme['s'+data.slider_theme].slider_spinner_t">
			<label for="ssp7" class="spindemo" ng-bind-html="getSpin('7')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="ssp8" type="radio" value="8" ng-model="data.theme['s'+data.slider_theme].slider_spinner_t">
			<label for="ssp8" class="spindemo" ng-bind-html="getSpin('8')"></label> 
		</div>
		<div style="clear:both"></div>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Theme Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_spinner_c"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Trigger</h2>
	</div>
	<div class="wpmca_group wpmc_dropc ico_sel">
		<label>Icon</label>
		<div class="wpmc_drop">
			<div class="wpmc_drop_head"><div ng-class="data.theme['s'+data.slider_theme].slider_trigger_i"></div>
				<div class="bar"></div>
			</div>
			<div class="wpmc_drop_body">
				<div class="longcell inone" ng-click="data.theme['s'+data.slider_theme].slider_trigger_i='inone'" ng-class="{'drop-sel': data.theme['s'+data.slider_theme].slider_trigger_i=='inone' }"></div>
				<div class="longcell idef" ng-click="data.theme['s'+data.slider_theme].slider_trigger_i='idef'" ng-class="{'drop-sel': data.theme['s'+data.slider_theme].slider_trigger_i=='idef' }"></div>
				<div ng-repeat="(k, v) in icons" ng-click="data.theme['s'+data.slider_theme].slider_trigger_i=k" class="{{k}}" ng-class="{'drop-sel': k == data.theme['s'+data.slider_theme].slider_trigger_i }"></div>
			</div>
		</div>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Icon Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_trigger_c"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_trigger_bg"/>
	</div>
<div class="wpmca_group wpmcarange">
	<label>Position from top(%)</label>
	<input type="range" min="0" max="100" class="wpmchimp-range-sel" ng-model="data.theme['s'+data.slider_theme].slider_trigger_top">
</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['s'+data.slider_theme].slider_trigger_hider">  
			<div class="mcheckbox"></div>Distraction-free Mode</label>
			<span class="wpmcahint" data-hint="A small button to hide trigger"></span>
	</div>    
	<div class="wpmca_group wpmcacolor">
		<label>Hide-icon Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_trigger_hc"/>
	</div>
<div class="wpmca_group wpmcatxts wpmcacb"> 
	<label><input type="checkbox" ng-model="slider_trigger_scroll" ng-true-value="'1'">  
	<div class="mcheckbox"></div>Appear after</label>
	<input type="text" class="wpmchimp_texts" ng-model="slider_trigger_scrollp">
	<span>% of the page scrolled</span>
</div>
</div>

<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Status Message</h2>
		<span class="wpmcahint headhint" data-hint="Customize your Success or Error Message"></span>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['s'+data.slider_theme].slider_status_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['s'+data.slider_theme].slider_status_fs" ng-options="f for f in fontsiz track by f">
			<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['s'+data.slider_theme].slider_status_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['s'+data.slider_theme].slider_status_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_status_fc"/>
	</div>
</div>

<div class="wpmca_item">
	<div class="itemhead">
			<h2>Personalize your Tag</h2>
			<span class="wpmcahint headhint" data-hint="Customize your Tag"></span>
	</div>

	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['s'+data.slider_theme].slider_tag_en">  
			<div class="mcheckbox"></div>Enable</label>
	</div>               
	<div class="wpmca_group wpmcatxt"> 
		<input type="text" class="wpmchimp_text" spellcheck="false" required  ng-model="data.theme['s'+data.slider_theme].slider_tag">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Tag Text</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['s'+data.slider_theme].slider_tag_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['s'+data.slider_theme].slider_tag_fs" ng-options="f for f in fontsiz track by f">
			<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['s'+data.slider_theme].slider_tag_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['s'+data.slider_theme].slider_tag_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_tag_fc"/>
	</div>
</div>


<div class="wpmca_item extra_opts">
<div class="itemhead">
<h2>Additional Theme Options</h2>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['1','2','3','4','5','6','7','8','9'].indexOf(data.slider_theme) != -1">
<label>Canvas Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_canvas_c"/>
</div>
<div class="wpmca_group wpmcacolor">
<label>Background Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_bg_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['2'].indexOf(data.slider_theme) != -1">
<label>Header Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_hbg_c"/>
</div>
<div class="wpmca_group wpmcatxts" ng-show="['7'].indexOf(data.slider_theme) != -1">      
<label>Header Blur</label>
<input type="text" class="wpmchimp_texts" ng-model="data.theme['s'+data.slider_theme].slider_hblur">
<span>px</span>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.slider_theme) != -1">
<label>Header Utility Icon</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_ui_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['2','7'].indexOf(data.slider_theme) != -1">
<label>Header Icon</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_hi_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.slider_theme) != -1">
<label>Header Icon Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_hi_bc"/>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.slider_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['s'+data.slider_theme].slider_exhead">  
<div class="mcheckbox"></div>Disable Extra Head</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.slider_theme) != -1">
<input id="slider_exhopt1" type="radio" value="0" ng-model="data.theme['s'+data.slider_theme].slider_exhopt"> 
<label for="slider_exhopt1">Utility Extra Head</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.slider_theme) != -1">
<input id="slider_exhopt2" type="radio" value="1" ng-model="data.theme['s'+data.slider_theme].slider_exhopt"> 
<label for="slider_exhopt2">Paragraph Extra Head</label>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.slider_theme) != -1">
<label>Extra Head Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_exhbc"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.slider_theme) != -1">
<label>Extra Head Font Color 1</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_exhc1"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.slider_theme) != -1">
<label>Extra Head Font Color 2</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_exhc2"/>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.slider_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['s'+data.slider_theme].slider_locapi">
<span class="highlighter"></span>
<span class="bar"></span>
<label>OpenWeatherMap API Key</label>
<span style="margin: 5px;">Click <a href="http://openweathermap.org/appid" style="display:inline-block" target="_blank">here</a> to get your OpenWeatherMap API</span>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.slider_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['s'+data.slider_theme].slider_wloc">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Location for Weather</label>
<span style="float: left;margin: 5px;">ex : London,UK</span><a href="http://openweathermap.org/find?q={{data.theme['s'+data.slider_theme].slider_wloc}}" target="_blank">Find your city</a>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.slider_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['s'+data.slider_theme].slider_exhp">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Extra Head Paragraph</label>
</div>
<div class="wpmca_group" ng-show="['7'].indexOf(data.slider_theme) != -1">
<select class="wpmca_sel google_fonts" ng-model="data.theme['s'+data.slider_theme].slider_exhf" ng-options="f for f in fonts track by f">
<option value="">Font</option>
</select>
<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['s'+data.slider_theme].slider_exhfw">
<option value="">Weight</option>
<option value="normal">Normal</option>
<option value="bold">Bold</option>
<option value="lighter">Lighter</option>
<option value="bolder">Bolder</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="300">300</option>
<option value="400">400</option>
<option value="500">500</option>
<option value="600">600</option>
<option value="700">700</option>
<option value="800">800</option>
<option value="900">900</option>
</select>
<select class="wpmca_sel google_fonts_style" ng-model="data.theme['s'+data.slider_theme].slider_exhfst">
<option value="">Style</option>
<option value="normal">Normal</option>
<option value="italic">Italic</option>
<option value="oblique">oblique</option>
</select>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.slider_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['s'+data.slider_theme].slider_l2owm">  
<div class="mcheckbox"></div>Link to OpenWeatherMap</label>
</div>
<div class="wpmca_group wpmcacb">
<label class="wpmcapara">Background Pattern</label>
<div class="wpmca_compac p1">
<input id="sbgp1" type="radio" value="pat0" ng-model="data.theme['s'+data.slider_theme].slider_bg_p">
<label for="sbgp1"><div class="patdemo pt0"></div></label>
</div>
<div class="wpmca_compac">
<input id="sbgp2" type="radio" value="pat1" ng-model="data.theme['s'+data.slider_theme].slider_bg_p">
<label for="sbgp2"><div class="patdemo pt1"></div></label> 
</div>
<div class="wpmca_compac p1">
<input id="sbgp3" type="radio" value="pat2" ng-model="data.theme['s'+data.slider_theme].slider_bg_p">
<label for="sbgp3"><div class="patdemo pt2"></div></label> 
</div>
<div class="wpmca_compac">
<input id="sbgp4" type="radio" value="pat3" ng-model="data.theme['s'+data.slider_theme].slider_bg_p">
<label for="sbgp4"><div class="patdemo pt3"></div></label> 
</div>
<div class="wpmca_compac p1">
<input id="sbgp5" type="radio" value="pat4" ng-model="data.theme['s'+data.slider_theme].slider_bg_p">
<label for="sbgp5"><div class="patdemo pt4"></div></label> 
</div>
<div class="wpmca_compac">
<input id="sbgp6" type="radio" value="pat5" ng-model="data.theme['s'+data.slider_theme].slider_bg_p">
<label for="sbgp6"><div class="patdemo pt5"></div></label> 
</div>
<div style="clear:both"></div>
</div>
<div class="wpmca_group wpmcacb" ng-show="['2','3','4','5','6'].indexOf(data.slider_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['s'+data.slider_theme].slider_disimg">  
<div class="mcheckbox"></div>Disable Image/Video Head</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['2','3','4','5','6','7'].indexOf(data.slider_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['s'+data.slider_theme].slider_img1">
<button class="wpmca_button green material-design wpmc_media_uploader">Select Image</button>
<span class="wpmcahint" data-hint="Upload Image or Enter base64 of image with dimension {{idim('s',data.slider_theme)}}(px)"></span>
<span class="highlighter"></span>
<span class="bar"></span>
<label>Featured Image URL</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['6'].indexOf(data.slider_theme) != -1">
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['s'+data.slider_theme].slider_vid1">
<span class="wpmcahint" data-hint="YouTube/Vimeo/DailyMotion URL"></span>
<span class="highlighter"></span>
<span class="bar"></span>
<label>Featured Video URL</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.slider_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['s'+data.slider_theme].slider_dissoc">
<div class="mcheckbox"></div>Disable Social Buttons</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.slider_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['s'+data.slider_theme].slider_soc_head">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Social Buttons Header</label>
</div>
<div class="wpmca_group" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.slider_theme) != -1">
<select class="wpmca_sel google_fonts" ng-model="data.theme['s'+data.slider_theme].slider_soc_f" ng-options="f for f in fonts track by f">
<option value="">Font</option>
</select>
<select class="wpmca_sel google_fonts_size" ng-model="data.theme['s'+data.slider_theme].slider_soc_fs" ng-options="f for f in fontsiz track by f">
<option value="">Size</option>
</select>
<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['s'+data.slider_theme].slider_soc_fw">
<option value="">Weight</option>
<option value="normal">Normal</option>
<option value="bold">Bold</option>
<option value="lighter">Lighter</option>
<option value="bolder">Bolder</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="300">300</option>
<option value="400">400</option>
<option value="500">500</option>
<option value="600">600</option>
<option value="700">700</option>
<option value="800">800</option>
<option value="900">900</option>
</select>
<select class="wpmca_sel google_fonts_style" ng-model="data.theme['s'+data.slider_theme].slider_soc_fst">
<option value="">Style</option>
<option value="normal">Normal</option>
<option value="italic">Italic</option>
<option value="oblique">oblique</option>
</select>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.slider_theme) != -1">
<label>Social Buttons Header Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_soc_fc"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.slider_theme) != -1">
<label>Social Bar Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_soc_bc"/>
</div>
<div class="wpmca_group wpmc_dropc ico_sel">
	<label>Submit Icon</label>
	<div class="wpmc_drop">
		<div class="wpmc_drop_head"><div ng-class="data.theme['s'+data.slider_theme].slider_button_i"></div>
			<div class="bar"></div>
		</div>
		<div class="wpmc_drop_body">
			<div class="longcell inone" ng-click="data.theme['s'+data.slider_theme].slider_button_i='inone'" ng-class="{'drop-sel': data.theme['s'+data.slider_theme].slider_button_i=='inone' }"></div>
			<div class="longcell idef" ng-click="data.theme['s'+data.slider_theme].slider_button_i='idef'" ng-class="{'drop-sel': data.theme['s'+data.slider_theme].slider_button_i=='idef' }"></div>
			<div ng-repeat="(k, v) in icons" ng-click="data.theme['s'+data.slider_theme].slider_button_i=k" class="{{k}}" ng-class="{'drop-sel': k == data.theme['s'+data.slider_theme].slider_button_i }"></div>
		</div>
	</div>
</div>
<div class="wpmca_group wpmcacolor">
<label>Icon Color</label>
<input minicolors  type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_inico_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.slider_theme) != -1">
<label>Glow 1 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_glw1_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.slider_theme!='5'}">
<label>Glow 1 Blur</label>
<input type="range" min="0" max="50"  class="wpmchimp-range-sel" ng-model="data.theme['s'+data.slider_theme].slider_glw1_b">
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.slider_theme) != -1">
<label>Glow 2 Color</label>
<input minicolors  type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_glw2_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.slider_theme!='5'}">
<label>Glow 2 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['s'+data.slider_theme].slider_glw2_b">
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.slider_theme) != -1">
<label>Glow 3 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_glw3_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.slider_theme!='5'}">
<label>Glow 3 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['s'+data.slider_theme].slider_glw3_b">
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.slider_theme) != -1">
<label>Glow 4 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['s'+data.slider_theme].slider_glw4_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.slider_theme!='5'}">
<label>Glow 4 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['s'+data.slider_theme].slider_glw4_b">
</div>
</div>


<div class="wpmca_item">
	<div class="itemhead">
			<h2>Filter by Device</h2>
			<span class="wpmcahint headhint" data-hint="Show Subscription form if the user visits from?"></span>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-model="data.slider_desktop" ng-true-value="'1'">
			<div class="mcheckbox"></div>Desktop</label>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-model="data.slider_tablet" ng-true-value="'1'">
			<div class="mcheckbox"></div>Tablet</label>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-model="data.slider_mobile" ng-true-value="'1'">
			<div class="mcheckbox"></div>Mobile</label>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
			<h2>Filter by Page type</h2>
			<span class="wpmcahint headhint" data-hint="Show Subscription form if the user visits?"></span>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-model="data.slider_homepage" ng-true-value="'1'">
			<div class="mcheckbox"></div>Home Page</label>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-model="data.slider_blog" ng-true-value="'1'">
			<div class="mcheckbox"></div>Blog Page</label>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-model="data.slider_page" ng-true-value="'1'">
			<div class="mcheckbox"></div>Pages</label>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-model="data.slider_post" ng-true-value="'1'">
			<div class="mcheckbox"></div>Posts</label>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-model="data.slider_category" ng-true-value="'1'">
			<div class="mcheckbox"></div>Categories/Archives</label>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-model="data.slider_search" ng-true-value="'1'">
			<div class="mcheckbox"></div>Search</label>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-model="data.slider_404error" ng-true-value="'1'">
			<div class="mcheckbox"></div>404 Error</label>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Filter by Specific Posts</h2>
		<span class="wpmcahint headhint" data-hint="Include/Exclude Specific posts from Slider"></span>
	</div>
	<div class="wpmca_group togdouble">
		<div class="paper-toggle">
			<input id="slider_spec_post" type="checkbox" class="wpmcatoggle" ng-model="data.slider_excl" ng-true-value="'1'">
			<label for="slider_spec_post">Exclude</label>
		</div><label for="slider_spec_post" style="top: -4px;left: 60px;position: relative;">Include</label>
	</div>
		<div class="wpmca_group">
			<div class="wpmcapara"> Enter Post/Page IDs
					<span class="wpmcahint" data-hint="Separate post ids by comma ','"></span>
			</div>
		</div>
		<div class="wpmca_group">
			<div class="wpmcapara"><textarea ng-model="data.slider_excl_id"></textarea>
		</div>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
			<h2>Behaviour</h2>
			<span class="wpmcahint headhint" data-hint="Behaviour of the Slider"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Orientation</label>
		<div class="wpmca_compac p1">
			<input id="so1" type="radio" ng-model="data.slider_orient" value="left">
			<label for="so1">Left <div class="orientdemo lefto"></div></label>
		</div>
		<div class="wpmca_compac">
			<input id="so2" type="radio" ng-model="data.slider_orient" value="right">
			<label for="so2">Right <div class="orientdemo righto"></div></label> 
		</div>
		<div style="clear:both"></div>
 </div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-model="data.slider_behave_movein" ng-true-value="'1'">
			<div class="mcheckbox"></div>Move-in-with </label>
			<span class="wpmcahint" data-hint="Move in the slider from out"></span>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb"> 
		<label>Appear after</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.slider_behave_time">
		<span>seconds</span>
		<label><input type="checkbox" style="margin-left: 10px;" ng-model="data.slider_behave_time_inac" ng-true-value="'1'">
		<div class="mcheckbox"></div>of Inactivity</label>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb">
		<label> <input type="checkbox" ng-model="data.slider_behave_depart" ng-true-value="'1'">
			<div class="mcheckbox"></div>Depart Intent </label>
			<span style="margin-left: 5px;">activated after</span>
			<input type="text" class="wpmchimp_texts" ng-model="data.slider_behave_departs">
			<span>seconds time delay</span>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-true-value="'1'" ng-model="data.slider_close_bck">
			<div class="mcheckbox"></div>Close when Slider background is clicked</label>
			<span class="wpmcahint" data-hint="If not selected, visitors need to click close button to exit the slider"></span>
	</div>
	<div class="wpmca_group wpmcacb">
			<label><input type="checkbox" ng-true-value="'1'" ng-model="data.slider_behave_onclk">
			<div class="mcheckbox"></div>Enable Open-on-Click</label>
			<span class="wpmcahint" data-hint="Open Slider on click an button/link"></span>
			<div class="p3">Use class 'chimpmate-slider' in button/'#chimpmate-slider' as link</div>
	</div>
</div>
<?php
	break;
	case 'widget':
?>
<div class="wpmca_item widhead simghead">
	<div class="itemhead">
		<h2>Subscribe box in Widget</h2>
	</div>
	<div class="wpmca_group">
		<div class="paper-toggle">
			<input type="checkbox" id="widget_en" ng-model="data.widget" ng-true-value="'1'" class="wpmcatoggle">
			<label for="widget_en">Enable</label>
		</div>
		<span class="wpmcahint" data-hint="Enable Widget"></span>
	</div>
	<div class="wpmca_group wpmc_dropc">
		<label>Custom Form</label>
		<div class="wpmc_drop">
			<div class="wpmc_drop_head"><div>{{getformbyid(data.widget_form).name || (data.cforms.length?'Select Form':'No Forms')}}</div>
			<div class="bar"></div>
			</div>
			<div class="wpmc_drop_body">
			<div ng-repeat="form in data.cforms" ng-click="data.widget_form = form.id">{{form.name}}</div>
			</div>
		</div>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Select Theme</h2>
		<span class="wpmcahint headhint" data-hint="Select a theme for widget"></span>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel" ng-change="themeswitcher('widget')" style="width: 260px;" ng-model="data.widget_theme">
			<option value="4">Smash</option>
			<option value="2">Material</option>
			<option value="7">Material Lite</option>
			<option value="3">Onamy</option>
			<option value="6">Unidesign</option>
			<option value="5">Glow</option>
			<option value="1">Epsilon</option>
			<option value="8">Nova</option>
			<option value="9">Leo</option>
			<option value="0">Basic</option>
		</select>
	</div>
	<div class="wpmca_group">
		<button class="wpmca_button orange material-design wpmca_vupre" ng-click="vupre($event,data.widget_theme)">Live Editor</button>
	</div>
</div>
<div class="wpmca_prev livewidget">
<div class="wpmca_topbar">
<div class="wpmca_round" style="background:#f67a00"></div><div class="wpmca_round" style="background:#ebc71f"></div><div class="wpmca_round" style="background:#31bb37"></div><div class="wpmca_left"></div><div class="wpmca_right"></div><div class="wpmca_long"></div><div class="wpmca_search"></div><div class="wpmca_opts"></div>
</div>
<div class="wpmca_viewportbck">
<div class="wpmca_lineimg"></div>
<div class="wpmca_divide" style="left:33%"></div>
<div class="wpmca_divide" style="left:66%"></div>
<div ng-repeat="i in fontsiz.slice(0, 2)" class="wpmca_linecont">
	<div ng-repeat="i in fontsiz.slice(0, 10)" class="wpmca_line"></div></div>
</div>
<div class="wpmca_viewport"></div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Custom Message</h2>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['w'+data.widget_theme].widget_heading">
		<span class="wpmcahint" data-hint="Heading for the Widget"></span>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Heading</label>
	</div>
	<div class="wpmca_group">
		<div class="wpmcapara">Message
				<span class="wpmcahint" data-hint="Message for the Widget"></span>
		</div>
		<ng-quill-editor ng-model="data.theme['w'+data.widget_theme].widget_msg" toolbar="true" link-tooltip="true" image-tooltip="true" toolbar-entries="bold list bullet italic underline strike align color background link image"></ng-quill-editor>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['w'+data.widget_theme].widget_msg_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['w'+data.widget_theme].widget_msg_fs" ng-options="f for f in fontsiz track by f">
			<option value="">Size</option>
		</select>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
			<h2>Personalize your Text Box</h2>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['w'+data.widget_theme].widget_tbox_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['w'+data.widget_theme].widget_tbox_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['w'+data.widget_theme].widget_tbox_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['w'+data.widget_theme].widget_tbox_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_tbox_fc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_tbox_bgc"/>
	</div>
	<div class="wpmca_group wpmcatxts">      
		<label>Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['w'+data.widget_theme].widget_tbox_w">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Height</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['w'+data.widget_theme].widget_tbox_h">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['w'+data.widget_theme].widget_tbox_bor">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_tbox_borc"/>
	</div>
</div>

<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Checkbox/Radio</h2>
	</div>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Checkmark</label>
		<div class="wpmca_compac p1">
			<input id="wcm1" type="radio" value="ch1" ng-model="data.theme['w'+data.widget_theme].widget_check_mark">
			<label for="wcm1">Graphic 1 <div class="checkbdemo cicon ch1"></div></label>
		</div>
		<div class="wpmca_compac">
			<input id="wcm2" type="radio" value="ch2" ng-model="data.theme['w'+data.widget_theme].widget_check_mark">
			<label for="wcm2">Graphic 2 <div class="checkbdemo cicon ch2"></div></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="wcm3" type="radio" value="ch3" ng-model="data.theme['w'+data.widget_theme].widget_check_mark">
			<label for="wcm3">Graphic 3 <div class="checkbdemo cicon ch3"></div></label> 
		</div>
		<div class="wpmca_compac">
			<input id="wcm4" type="radio" value="ch4" ng-model="data.theme['w'+data.widget_theme].widget_check_mark">
			<label for="wcm4">Graphic 4 <div class="checkbdemo cicon ch4"></div></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="wcm5" type="radio" value="ch5" ng-model="data.theme['w'+data.widget_theme].widget_check_mark">
			<label for="wcm5">Graphic 5 <div class="checkbdemo cicon ch5"></div></label> 
		</div>
		<div class="wpmca_compac">
			<input id="wcm6" type="radio" value="ch6" ng-model="data.theme['w'+data.widget_theme].widget_check_mark">
			<label for="wcm6">Graphic 6 <div class="checkbdemo cicon ch6"></div></label> 
		</div>
		<div style="clear:both"></div>
	</div>
	<div class="wpmca_group wpmcsingsel">
		<label class="wpmcapara"> Maximum Options per Line</label>
		<select class="wpmca_sel" ng-model="data.theme['w'+data.widget_theme].widget_check_pline" >
			<option value="">Theme Default</option>
			<option value="1">1 Column</option>
			<option value="2">2 Column</option>
			<option value="3">3 Column</option>
			<option value="4">4 Column</option>
			<option value="f">Flexible Layout</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Selected option Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_check_ic"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Theme Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_check_c"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_check_borc"/>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['w'+data.widget_theme].widget_check_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['w'+data.widget_theme].widget_check_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['w'+data.widget_theme].widget_check_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['w'+data.widget_theme].widget_check_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_check_fc"/>
	</div>
</div>
<div class="wpmca_item" ng-hide="data.widget_theme == 5">
	<div class="itemhead">
		<h2>Personalize your Button</h2>
	</div>
	<div class="wpmca_group wpmcatxt">      
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['w'+data.widget_theme].widget_button">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Button Text</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['w'+data.widget_theme].widget_button_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['w'+data.widget_theme].widget_button_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['w'+data.widget_theme].widget_button_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['w'+data.widget_theme].widget_button_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_button_fc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Hover Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_button_fch"/>
	</div>
	<div class="wpmca_group wpmcatxts">      
		<label>Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['w'+data.widget_theme].widget_button_w">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Height</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['w'+data.widget_theme].widget_button_h">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_button_bc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Hover Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_button_bch"/>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Radius</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['w'+data.widget_theme].widget_button_br">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['w'+data.widget_theme].widget_button_bor">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_button_borc"/>
	</div>
</div>

<div class="wpmca_item">
	<div class="itemhead">
			<h2>Personalize your Spinner</h2>
	</div>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Spinner</label>
		<div class="wpmca_compac p1">
			<input id="wsp1" type="radio" value="1" ng-model="data.theme['w'+data.widget_theme].widget_spinner_t">
			<label for="wsp1" class="spindemo" ng-bind-html="getSpin('1')"></label>
		</div>
		<div class="wpmca_compac">
			<input id="wsp2" type="radio" value="2" ng-model="data.theme['w'+data.widget_theme].widget_spinner_t">
			<label for="wsp2" class="spindemo" ng-bind-html="getSpin('2')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="wsp3" type="radio" value="3" ng-model="data.theme['w'+data.widget_theme].widget_spinner_t">
			<label for="wsp3" class="spindemo" ng-bind-html="getSpin('3')"></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="wsp4" type="radio" value="4" ng-model="data.theme['w'+data.widget_theme].widget_spinner_t">
			<label for="wsp4" class="spindemo" ng-bind-html="getSpin('4')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="wsp5" type="radio" value="5" ng-model="data.theme['w'+data.widget_theme].widget_spinner_t">
			<label for="wsp5" class="spindemo" ng-bind-html="getSpin('5')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="wsp6" type="radio" value="6" ng-model="data.theme['w'+data.widget_theme].widget_spinner_t">
			<label for="wsp6" class="spindemo" ng-bind-html="getSpin('6')"></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="wsp7" type="radio" value="7" ng-model="data.theme['w'+data.widget_theme].widget_spinner_t">
			<label for="wsp7" class="spindemo" ng-bind-html="getSpin('7')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="wsp8" type="radio" value="8" ng-model="data.theme['w'+data.widget_theme].widget_spinner_t">
			<label for="wsp8" class="spindemo" ng-bind-html="getSpin('8')"></label> 
		</div>
		<div style="clear:both"></div>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Theme Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_spinner_c"/>
	</div>
</div>

<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Status Message</h2>
		<span class="wpmcahint headhint" data-hint="Customize your Success or Error Message"></span>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['w'+data.widget_theme].widget_status_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['w'+data.widget_theme].widget_status_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['w'+data.widget_theme].widget_status_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['w'+data.widget_theme].widget_status_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_status_fc"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Tag</h2>
		<span class="wpmcahint headhint" data-hint="Customize your Tag"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['w'+data.widget_theme].widget_tag_en">  
		<div class="mcheckbox"></div>Enable</label>
	</div>              
	<div class="wpmca_group wpmcatxt"> 
		<input type="text" class="wpmchimp_text" spellcheck="false" required  ng-model="data.theme['w'+data.widget_theme].widget_tag">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Tag Text</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['w'+data.widget_theme].widget_tag_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['w'+data.widget_theme].widget_tag_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['w'+data.widget_theme].widget_tag_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['w'+data.widget_theme].widget_tag_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_tag_fc"/>
	</div>
</div>

<div class="wpmca_item extra_opts">
<div class="itemhead">
<h2>Additional Theme Options</h2>
</div>
<div class="wpmca_group wpmcacolor">
<label>Widget Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_bg_c"/>
</div>
<div class="wpmca_group" ng-show="['2','3','4','5','6','7','8','9'].indexOf(data.widget_theme) != -1">
<label>Heading Font Style</label>
<div style="margin: 10px 0;">
<select class="wpmca_sel google_fonts" ng-model="data.theme['w'+data.widget_theme].widget_heading_f" ng-options="f for f in fonts track by f">
<option value="">Font</option>
</select>
<select class="wpmca_sel google_fonts_size" ng-model="data.theme['w'+data.widget_theme].widget_heading_fs" ng-options="f for f in fontsiz track by f">
<option value="">Size</option>
</select>
<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['w'+data.widget_theme].widget_heading_fw">
<option value="">Weight</option>
<option value="normal">Normal</option>
<option value="bold">Bold</option>
<option value="lighter">Lighter</option>
<option value="bolder">Bolder</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="300">300</option>
<option value="400">400</option>
<option value="500">500</option>
<option value="600">600</option>
<option value="700">700</option>
<option value="800">800</option>
<option value="900">900</option>
</select>
<select class="wpmca_sel google_fonts_style" ng-model="data.theme['w'+data.widget_theme].widget_heading_fst">
<option value="">Style</option>
<option value="normal">Normal</option>
<option value="italic">Italic</option>
<option value="oblique">oblique</option>
</select>
</div>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['2','3','4','5','6','7','8','9'].indexOf(data.widget_theme) != -1">
<label>Heading Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_heading_fc"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['2','7'].indexOf(data.widget_theme) != -1">
<label>Header Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_hbg_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.widget_theme) != -1">
<label>Header Utility Icon</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_ui_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['2','7'].indexOf(data.widget_theme) != -1">
<label>Header Icon</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_hi_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.widget_theme) != -1">
<label>Header Icon Background</label>
<input minicolors  type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_hi_bc"/>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.widget_theme) != -1">
<input id="widget_exhopt1" type="radio" value="0" ng-model="data.theme['w'+data.widget_theme].widget_exhopt"> 
<label for="widget_exhopt1">Utility Extra Head</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.widget_theme) != -1">
<input id="widget_exhopt2" type="radio" value="1" ng-model="data.theme['w'+data.widget_theme].widget_exhopt"> 
<label for="widget_exhopt2">Paragraph Extra Head</label>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.widget_theme) != -1">
<label>Extra Head Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_exhbc"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.widget_theme) != -1">
<label>Extra Head Font Color 1</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_exhc1"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.widget_theme) != -1">
<label>Extra Head Font Color 2</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_exhc2"/>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.widget_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['w'+data.widget_theme].widget_locapi">
<span class="highlighter"></span>
<span class="bar"></span>
<label>OpenWeatherMap API Key</label>
<span style="margin: 5px;">Click <a href="http://openweathermap.org/appid" style="display:inline-block" target="_blank">here</a> to get your OpenWeatherMap API</span>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.widget_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['w'+data.widget_theme].widget_wloc">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Location for Weather</label>
<span style="float: left;margin: 5px;">ex : London,UK</span><a href="http://openweathermap.org/find?q={{data.theme['w'+data.widget_theme].widget_wloc}}" target="_blank">Find your city</a>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.widget_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['w'+data.widget_theme].widget_exhp">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Extra Head Paragraph</label>
</div>
<div class="wpmca_group" ng-show="['7'].indexOf(data.widget_theme) != -1">
<select class="wpmca_sel google_fonts" ng-model="data.theme['w'+data.widget_theme].widget_exhf" ng-options="f for f in fonts track by f">
<option value="">Font</option>
</select>
<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['w'+data.widget_theme].widget_exhfw">
<option value="">Weight</option>
<option value="normal">Normal</option>
<option value="bold">Bold</option>
<option value="lighter">Lighter</option>
<option value="bolder">Bolder</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="300">300</option>
<option value="400">400</option>
<option value="500">500</option>
<option value="600">600</option>
<option value="700">700</option>
<option value="800">800</option>
<option value="900">900</option>
</select>
<select class="wpmca_sel google_fonts_style" ng-model="data.theme['w'+data.widget_theme].widget_exhfst">
<option value="">Style</option>
<option value="normal">Normal</option>
<option value="italic">Italic</option>
<option value="oblique">oblique</option>
</select>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.widget_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['w'+data.widget_theme].widget_l2owm">  
<div class="mcheckbox"></div>Link to OpenWeatherMap</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.widget_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['w'+data.widget_theme].widget_exhead">  
<div class="mcheckbox"></div>Disable Extra Head</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.widget_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['w'+data.widget_theme].widget_dissoc">  
<div class="mcheckbox"></div>Disable Social Buttons</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['5','6'].indexOf(data.widget_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['w'+data.widget_theme].widget_disimg">  
<div class="mcheckbox"></div>Disable Image Head</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['5','6'].indexOf(data.widget_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['w'+data.widget_theme].widget_img1">
<button class="wpmca_button green material-design wpmc_media_uploader">Select Image</button>
<span class="wpmcahint" data-hint="Upload Image or Enter base64 of image with dimension {{idim('w',data.widget_theme)}}(px)"></span>
<span class="highlighter"></span>
<span class="bar"></span>
<label>Featured Image URL</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['6'].indexOf(data.widget_theme) != -1">
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['w'+data.widget_theme].widget_vid1">
<span class="wpmcahint" data-hint="YouTube/Vimeo/DailyMotion URL"></span>
<span class="highlighter"></span>
<span class="bar"></span>
<label>Featured Video URL</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.widget_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['w'+data.widget_theme].widget_soc_head">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Social Buttons Header</label>
</div>
<div class="wpmca_group" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.widget_theme) != -1">
<select class="wpmca_sel google_fonts" ng-model="data.theme['w'+data.widget_theme].widget_soc_f" ng-options="f for f in fonts track by f">
<option value="">Font</option>
</select>
<select class="wpmca_sel google_fonts_size" ng-model="data.theme['w'+data.widget_theme].widget_soc_fs" ng-options="f for f in fontsiz track by f">
<option value="">Size</option>
</select>
<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['w'+data.widget_theme].widget_soc_fw">
<option value="">Weight</option>
<option value="normal">Normal</option>
<option value="bold">Bold</option>
<option value="lighter">Lighter</option>
<option value="bolder">Bolder</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="300">300</option>
<option value="400">400</option>
<option value="500">500</option>
<option value="600">600</option>
<option value="700">700</option>
<option value="800">800</option>
<option value="900">900</option>
</select>
<select class="wpmca_sel google_fonts_style" ng-model="data.theme['w'+data.widget_theme].widget_soc_fst">
<option value="">Style</option>
<option value="normal">Normal</option>
<option value="italic">Italic</option>
<option value="oblique">oblique</option>
</select>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.widget_theme) != -1">
<label>Social Buttons Header Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_soc_fc"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.widget_theme) != -1">
<label>Social Bar Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.ltopt.widget_soc_bc"/>
</div>
<div class="wpmca_group wpmc_dropc ico_sel">
	<label>Submit Icon</label>
	<div class="wpmc_drop">
		<div class="wpmc_drop_head"><div ng-class="data.theme['w'+data.widget_theme].widget_button_i"></div>
			<div class="bar"></div>
		</div>
		<div class="wpmc_drop_body">
			<div class="longcell inone" ng-click="data.theme['w'+data.widget_theme].widget_button_i='inone'" ng-class="{'drop-sel': data.theme['w'+data.widget_theme].widget_button_i=='inone' }"></div>
			<div class="longcell idef" ng-click="data.theme['w'+data.widget_theme].widget_button_i='idef'" ng-class="{'drop-sel': data.theme['w'+data.widget_theme].widget_button_i=='idef' }"></div>
			<div ng-repeat="(k, v) in icons" ng-click="data.theme['w'+data.widget_theme].widget_button_i=k" class="{{k}}" ng-class="{'drop-sel': k == data.theme['w'+data.widget_theme].widget_button_i }"></div>
		</div>
	</div>
</div>
<div class="wpmca_group wpmcacolor">
<label>Icon Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_inico_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.widget_theme) != -1">
<label>Glow 1 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_glw1_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.widget_theme!='5'}">
<label>Glow 1 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['w'+data.widget_theme].widget_glw1_b">
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.widget_theme) != -1">
<label>Glow 2 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_glw2_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.widget_theme!='5'}">
<label>Glow 2 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['w'+data.widget_theme].widget_glw2_b">
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.widget_theme) != -1">
<label>Glow 3 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['w'+data.widget_theme].widget_glw3_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.widget_theme!='5'}">
<label>Glow 3 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['w'+data.widget_theme].widget_glw3_b">
</div>
</div>

<?php
	break;
	case 'addon':
?>
<div class="wpmca_item addhead simghead">
	<div class="itemhead">
		<h2>Subscribe box in Post Page</h2>
	</div>
	<div class="wpmca_group">
		<div class="paper-toggle">
			<input type="checkbox" id="addon_en" ng-model="data.addon" ng-true-value="'1'" class="wpmcatoggle">
			<label for="addon_en">Enable</label>
		</div>
		<span class="wpmcahint" data-hint="Enable Add-on"></span>
	</div>
	<div class="wpmca_group wpmc_dropc">
		<label>Custom Form</label>
		<div class="wpmc_drop">
			<div class="wpmc_drop_head"><div>{{getformbyid(data.addon_form).name || (data.cforms.length?'Select Form':'No Forms')}}</div>
			<div class="bar"></div>
			</div>
			<div class="wpmc_drop_body">
			<div ng-repeat="form in data.cforms" ng-click="data.addon_form = form.id">{{form.name}}</div>
			</div>
		</div>
	</div>
</div>
<div class="wpmca_item tophead simghead">
	<div class="itemhead">
		<h2>Topbar Subscription Box</h2>
	</div>
	<div class="wpmca_group">
		<div class="paper-toggle">
			<input type="checkbox" id="topbar_en" ng-model="data.topbar" ng-true-value="'1'" class="wpmcatoggle">
			<label for="topbar_en">Enable</label>
		</div>
		<span class="wpmcahint" data-hint="Enable Topbar"></span>
	</div>
	<div class="wpmca_group wpmc_dropc">
		<label>Custom Form</label>
		<div class="wpmc_drop">
			<div class="wpmc_drop_head"><div>{{getformbyid(data.topbar_form).name || (data.cforms.length?'Select Form':'No Forms')}}</div>
			<div class="bar"></div>
			</div>
			<div class="wpmc_drop_body">
			<div ng-repeat="form in data.cforms" ng-click="data.topbar_form = form.id">{{form.name}}</div>
			</div>
		</div>
	</div>
</div>
<div class="wpmca_item flihead simghead">
	<div class="itemhead">
		<h2>Flipbox Subscription Box</h2>
	</div>
	<div class="wpmca_group">
		<div class="paper-toggle">
			<input type="checkbox" id="flipbox_en" ng-model="data.flipbox" ng-true-value="'1'" class="wpmcatoggle">
			<label for="flipbox_en">Enable</label>
		</div>
		<span class="wpmcahint" data-hint="Enable Flipbox"></span>
	</div>
	<div class="wpmca_group wpmc_dropc">
		<label>Custom Form</label>
		<div class="wpmc_drop">
			<div class="wpmc_drop_head"><div>{{getformbyid(data.flipbox_form).name || (data.cforms.length?'Select Form':'No Forms')}}</div>
			<div class="bar"></div>
			</div>
			<div class="wpmc_drop_body">
			<div ng-repeat="form in data.cforms" ng-click="data.flipbox_form = form.id">{{form.name}}</div>
			</div>
		</div>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Select Theme</h2>
		<span class="wpmcahint headhint" data-hint="Select a theme for addon"></span>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel" ng-change="themeswitcher('addon')" style="width: 260px;" ng-model="data.addon_theme">
			<option value="4">Smash</option>
			<option value="2">Material</option>
			<option value="7">Material Lite</option>
			<option value="3">Onamy</option>
			<option value="6">Unidesign</option>
			<option value="5">Glow</option>
			<option value="1">Epsilon</option>
			<option value="8">Nova</option>
			<option value="9">Leo</option>
			<option value="0">Basic</option>
		</select>
	</div>
	<div class="wpmca_group">
		<button class="wpmca_button orange material-design wpmca_vupre" ng-click="vupre($event,data.addon_theme)">Live Editor</button>
	</div>
</div>
<div class="wpmca_prev liveaddon">
<div class="wpmca_topbar">
<div class="wpmca_round" style="background:#f67a00"></div><div class="wpmca_round" style="background:#ebc71f"></div><div class="wpmca_round" style="background:#31bb37"></div><div class="wpmca_left"></div><div class="wpmca_right"></div><div class="wpmca_long"></div><div class="wpmca_search"></div><div class="wpmca_opts"></div>
</div>
<div class="wpmca_viewportbck">
<div class="wpmca_lineimg"></div>
<div class="wpmca_divide" style="left:33%"></div>
<div class="wpmca_divide" style="left:66%"></div>
<div ng-repeat="i in fontsiz.slice(0, 2)" class="wpmca_linecont">
	<div ng-repeat="i in fontsiz.slice(0, 10)" class="wpmca_line"></div></div>
</div>
<div class="wpmca_viewport"></div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Custom Message</h2>
	</div>
	<div class="wpmca_group wpmcatxt">
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_heading">
		<span class="wpmcahint" data-hint="Heading for the Post Page"></span>
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Heading</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_heading_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_heading_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_heading_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_heading_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_heading_fc"/>
	</div>
	<div class="wpmca_group">
		<div class="wpmcapara">Message
				<span class="wpmcahint" data-hint="Message for the Lightbox"></span>
		</div>
		<ng-quill-editor ng-model="data.theme['a'+data.addon_theme].addon_msg" toolbar="true" link-tooltip="true" image-tooltip="true" toolbar-entries="bold list bullet italic underline strike align color background link image"></ng-quill-editor>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_msg_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_msg_fs" ng-options="f for f in fontsiz track by f">
			<option value="">Size</option>
		</select>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
			<h2>Personalize your Text Box</h2>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_tbox_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_tbox_fs" ng-options="f for f in fontsiz track by f">
			<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_tbox_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_tbox_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_tbox_fc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_tbox_bgc"/>
	</div>
	<div class="wpmca_group wpmcatxts">
		<label>Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['a'+data.addon_theme].addon_tbox_w">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Height</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['a'+data.addon_theme].addon_tbox_h">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['a'+data.addon_theme].addon_tbox_bor">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_tbox_borc"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Checkbox/Radio</h2>
	</div>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Checkmark</label>
		<div class="wpmca_compac p1">
			<input id="acm1" type="radio" value="ch1" ng-model="data.theme['a'+data.addon_theme].addon_check_mark">
			<label for="acm1">Graphic 1 <div class="checkbdemo cicon ch1"></div></label>
		</div>
		<div class="wpmca_compac">
			<input id="acm2" type="radio" value="ch2" ng-model="data.theme['a'+data.addon_theme].addon_check_mark">
			<label for="acm2">Graphic 2 <div class="checkbdemo cicon ch2"></div></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="acm3" type="radio" value="ch3" ng-model="data.theme['a'+data.addon_theme].addon_check_mark">
			<label for="acm3">Graphic 3 <div class="checkbdemo cicon ch3"></div></label> 
		</div>
		<div class="wpmca_compac">
			<input id="acm4" type="radio" value="ch4" ng-model="data.theme['a'+data.addon_theme].addon_check_mark">
			<label for="acm4">Graphic 4 <div class="checkbdemo cicon ch4"></div></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="acm5" type="radio" value="ch5" ng-model="data.theme['a'+data.addon_theme].addon_check_mark">
			<label for="acm5">Graphic 5 <div class="checkbdemo cicon ch5"></div></label> 
		</div>
		<div class="wpmca_compac">
			<input id="acm6" type="radio" value="ch6" ng-model="data.theme['a'+data.addon_theme].addon_check_mark">
			<label for="acm6">Graphic 6 <div class="checkbdemo cicon ch6"></div></label> 
		</div>
		<div style="clear:both"></div>
	</div>
	<div class="wpmca_group wpmcsingsel">
		<label class="wpmcapara"> Maximum Options per Line</label>
		<select class="wpmca_sel" ng-model="data.theme['a'+data.addon_theme].addon_check_pline" >
			<option value="">Theme Default</option>
			<option value="1">1 Column</option>
			<option value="2">2 Column</option>
			<option value="3">3 Column</option>
			<option value="4">4 Column</option>
			<option value="f">Flexible Layout</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Selected option Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_check_ic"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Theme Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_check_c"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_check_borc"/>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_check_f" ng-options="f for f in fonts track by f">
				<option value="">Font</option>
			</select>
			<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_check_fs" ng-options="f for f in fontsiz track by f">
					<option value="">Size</option>
			</select>
			<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_check_fw">
				<option value="">Weight</option>
				<option value="normal">Normal</option>
				<option value="bold">Bold</option>
				<option value="lighter">Lighter</option>
				<option value="bolder">Bolder</option>
				<option value="100">100</option>
				<option value="200">200</option>
				<option value="300">300</option>
				<option value="400">400</option>
				<option value="500">500</option>
				<option value="600">600</option>
				<option value="700">700</option>
				<option value="800">800</option>
				<option value="900">900</option>
			</select>
			<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_check_fst">
				<option value="">Style</option>
				<option value="normal">Normal</option>
				<option value="italic">Italic</option>
				<option value="oblique">oblique</option>
			</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_check_fc"/>
	</div>
</div>
<div class="wpmca_item" ng-hide="data.addon_theme == 5">
	<div class="itemhead">
		<h2>Personalize your Button</h2>
	</div>
	<div class="wpmca_group wpmcatxt">
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_button">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Button Text</label>
	</div>
	<div class="wpmca_group">
			<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_button_f" ng-options="f for f in fonts track by f">
				<option value="">Font</option>
			</select>
			<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_button_fs" ng-options="f for f in fontsiz track by f">
					<option value="">Size</option>
			</select>
			<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_button_fw">
				<option value="">Weight</option>
				<option value="normal">Normal</option>
				<option value="bold">Bold</option>
				<option value="lighter">Lighter</option>
				<option value="bolder">Bolder</option>
				<option value="100">100</option>
				<option value="200">200</option>
				<option value="300">300</option>
				<option value="400">400</option>
				<option value="500">500</option>
				<option value="600">600</option>
				<option value="700">700</option>
				<option value="800">800</option>
				<option value="900">900</option>
			</select>
			<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_button_fst">
				<option value="">Style</option>
				<option value="normal">Normal</option>
				<option value="italic">Italic</option>
				<option value="oblique">oblique</option>
			</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_button_fc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Hover Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_button_fch"/>
	</div>
	<div class="wpmca_group wpmcatxts">
		<label>Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['a'+data.addon_theme].addon_button_w">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Height</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['a'+data.addon_theme].addon_button_h">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_button_bc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Hover Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_button_bch"/>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Radius</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['a'+data.addon_theme].addon_button_br">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Border Width</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.theme['a'+data.addon_theme].addon_button_bor">
		<span>px</span>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Border Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_button_borc"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Spinner</h2>
	</div>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Spinner</label>
		<div class="wpmca_compac p1">
			<input id="asp1" type="radio" value="1" ng-model="data.theme['a'+data.addon_theme].addon_spinner_t">
			<label for="asp1" class="spindemo" ng-bind-html="getSpin('1')"></label>
		</div>
		<div class="wpmca_compac">
			<input id="asp2" type="radio" value="2" ng-model="data.theme['a'+data.addon_theme].addon_spinner_t">
			<label for="asp2" class="spindemo" ng-bind-html="getSpin('2')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="asp3" type="radio" value="3" ng-model="data.theme['a'+data.addon_theme].addon_spinner_t">
			<label for="asp3" class="spindemo" ng-bind-html="getSpin('3')"></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="asp4" type="radio" value="4" ng-model="data.theme['a'+data.addon_theme].addon_spinner_t">
			<label for="asp4" class="spindemo" ng-bind-html="getSpin('4')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="asp5" type="radio" value="5" ng-model="data.theme['a'+data.addon_theme].addon_spinner_t">
			<label for="asp5" class="spindemo" ng-bind-html="getSpin('5')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="asp6" type="radio" value="6" ng-model="data.theme['a'+data.addon_theme].addon_spinner_t">
			<label for="asp6" class="spindemo" ng-bind-html="getSpin('6')"></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="asp7" type="radio" value="7" ng-model="data.theme['a'+data.addon_theme].addon_spinner_t">
			<label for="asp7" class="spindemo" ng-bind-html="getSpin('7')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="asp8" type="radio" value="8" ng-model="data.theme['a'+data.addon_theme].addon_spinner_t">
			<label for="asp8" class="spindemo" ng-bind-html="getSpin('8')"></label> 
		</div>
		<div style="clear:both"></div>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Theme Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_spinner_c"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Status Message</h2>
		<span class="wpmcahint headhint" data-hint="Customize your Success or Error Message"></span>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_status_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_status_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_status_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_status_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_status_fc"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Personalize your Tag</h2>
		<span class="wpmcahint headhint" data-hint="Customize your Tag"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['a'+data.addon_theme].addon_tag_en">  
		<div class="mcheckbox"></div>Enable</label>
	</div>              
	<div class="wpmca_group wpmcatxt"> 
		<input type="text" class="wpmchimp_text" spellcheck="false" required  ng-model="data.theme['a'+data.addon_theme].addon_tag">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Tag Text</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_tag_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_tag_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_tag_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_tag_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_tag_fc"/>
	</div>
</div>
<div class="wpmca_item extra_opts">
<div class="itemhead">
<h2>Additional Theme Options</h2>
</div>
<div class="wpmca_group wpmcacolor addon_bg_c">
<label>Addon Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_bg_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['1','2','3','4','6','7','8','9'].indexOf(data.addon_theme) != -1">
<label>Border Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_bor_c"/>
</div>
<div class="wpmca_group wpmcatxts" ng-show="['1','2','3','4','6','7','8','9'].indexOf(data.addon_theme) != -1"> 
<label>Border Width</label>
<input type="text" class="wpmchimp_texts" ng-model="data.theme['a'+data.addon_theme].addon_bor_w">
<span>px</span>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['2','7'].indexOf(data.addon_theme) != -1">
<label>Header Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_hbg_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.addon_theme) != -1">
<label>Header Utility Icon</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_ui_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['2','7'].indexOf(data.addon_theme) != -1">
<label>Header Icon</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_hi_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.addon_theme) != -1">
<label>Header Icon Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_hi_bc"/>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.addon_theme) != -1">
<input id="addon_exhopt1" type="radio" value="0" ng-model="data.theme['a'+data.addon_theme].addon_exhopt"> 
<label for="addon_exhopt1">Utility Extra Head</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.addon_theme) != -1">
<input id="addon_exhopt2" type="radio" value="1" ng-model="data.theme['a'+data.addon_theme].addon_exhopt"> 
<label for="addon_exhopt2">Paragraph Extra Head</label>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.addon_theme) != -1">
<label>Extra Head Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_exhbc"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.addon_theme) != -1">
<label>Extra Head Font Color 1</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_exhc1"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['7'].indexOf(data.addon_theme) != -1">
<label>Extra Head Font Color 2</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_exhc2"/>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.addon_theme) != -1">      
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_locapi">
<span class="highlighter"></span>
<span class="bar"></span>
<label>OpenWeatherMap API Key</label>
<span style="margin: 5px;">Click <a href="http://openweathermap.org/appid" style="display:inline-block" target="_blank">here</a> to get your OpenWeatherMap API</span>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.addon_theme) != -1">
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_wloc">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Location for Weather</label>
<span style="float: left;margin: 5px;">ex : London,UK</span><a href="http://openweathermap.org/find?q={{data.theme['a'+data.addon_theme].addon_wloc}}" target="_blank">Find your city</a>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['7'].indexOf(data.addon_theme) != -1">
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_exhp">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Extra Head Paragraph</label>
</div>
<div class="wpmca_group" ng-show="['7'].indexOf(data.addon_theme) != -1">
<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_exhf" ng-options="f for f in fonts track by f">
<option value="">Font</option>
</select>
<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_exhfw">
<option value="">Weight</option>
<option value="normal">Normal</option>
<option value="bold">Bold</option>
<option value="lighter">Lighter</option>
<option value="bolder">Bolder</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="300">300</option>
<option value="400">400</option>
<option value="500">500</option>
<option value="600">600</option>
<option value="700">700</option>
<option value="800">800</option>
<option value="900">900</option>
</select>
<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_exhfst">
<option value="">Style</option>
<option value="normal">Normal</option>
<option value="italic">Italic</option>
<option value="oblique">oblique</option>
</select>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.addon_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['a'+data.addon_theme].addon_l2owm">
<div class="mcheckbox"></div>Link to OpenWeatherMap</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['7'].indexOf(data.addon_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['a'+data.addon_theme].addon_exhead">
<div class="mcheckbox"></div>Disable Extra Head</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.addon_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['a'+data.addon_theme].addon_dissoc">
<div class="mcheckbox"></div>Disable Social Buttons</label>
</div>
<div class="wpmca_group wpmcacb" ng-show="['5','6'].indexOf(data.addon_theme) != -1">
<label><input type="checkbox" ng-true-value="'1'" ng-model="data.theme['a'+data.addon_theme].addon_disimg">
<div class="mcheckbox"></div>Disable Image Head</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['5','6'].indexOf(data.addon_theme) != -1">
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_img1">
<button class="wpmca_button green material-design wpmc_media_uploader">Select Image</button>
<span class="wpmcahint" data-hint="Upload Image or Enter base64 of image with dimension {{idim('a',data.addon_theme)}}(px)"></span>
<span class="highlighter"></span>
<span class="bar"></span>
<label>Featured Image URL</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['6'].indexOf(data.addon_theme) != -1">
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_vid1">
<span class="wpmcahint" data-hint="YouTube/Vimeo/DailyMotion URL"></span>
<span class="highlighter"></span>
<span class="bar"></span>
<label>Featured Video URL</label>
</div>
<div class="wpmca_group wpmcatxt" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.addon_theme) != -1">
<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_soc_head">
<span class="highlighter"></span>
<span class="bar"></span>
<label>Social Buttons Header</label>
</div>
<div class="wpmca_group" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.addon_theme) != -1">
<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_soc_f" ng-options="f for f in fonts track by f">
<option value="">Font</option>
</select>
<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_soc_fs" ng-options="f for f in fontsiz track by f">
<option value="">Size</option>
</select>
<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_soc_fw">
<option value="">Weight</option>
<option value="normal">Normal</option>
<option value="bold">Bold</option>
<option value="lighter">Lighter</option>
<option value="bolder">Bolder</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="300">300</option>
<option value="400">400</option>
<option value="500">500</option>
<option value="600">600</option>
<option value="700">700</option>
<option value="800">800</option>
<option value="900">900</option>
</select>
<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_soc_fst">
<option value="">Style</option>
<option value="normal">Normal</option>
<option value="italic">Italic</option>
<option value="oblique">oblique</option>
</select>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['1','2','3','4','5','6','7','8'].indexOf(data.addon_theme) != -1">
<label>Social Buttons Header Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_soc_fc"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.addon_theme) != -1">
<label>Social Bar Background</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.ltopt.addon_soc_bc"/>
</div>
<div class="wpmca_group wpmc_dropc ico_sel">
	<label>Submit Icon</label>
	<div class="wpmc_drop">
		<div class="wpmc_drop_head"><div ng-class="data.theme['a'+data.addon_theme].addon_button_i"></div>
			<div class="bar"></div>
		</div>
		<div class="wpmc_drop_body">
			<div class="longcell inone" ng-click="data.theme['a'+data.addon_theme].addon_button_i='inone'" ng-class="{'drop-sel': data.theme['a'+data.addon_theme].addon_button_i=='inone' }"></div>
			<div class="longcell idef" ng-click="data.theme['a'+data.addon_theme].addon_button_i='idef'" ng-class="{'drop-sel': data.theme['a'+data.addon_theme].addon_button_i=='idef' }"></div>
			<div ng-repeat="(k, v) in icons" ng-click="data.theme['a'+data.addon_theme].addon_button_i=k" class="{{k}}" ng-class="{'drop-sel': k == data.theme['a'+data.addon_theme].addon_button_i }"></div>
		</div>
	</div>
</div>
<div class="wpmca_group wpmcacolor">
<label>Icon Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_inico_c"/>
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.addon_theme) != -1">
<label>Glow 1 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_glw1_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.addon_theme!='5'}">
<label>Glow 1 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['a'+data.addon_theme].addon_glw1_b">
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.addon_theme) != -1">
<label>Glow 2 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_glw2_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.addon_theme!='5'}">
<label>Glow 2 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['a'+data.addon_theme].addon_glw2_b">
</div>
<div class="wpmca_group wpmcacolor" ng-show="['5'].indexOf(data.addon_theme) != -1">
<label>Glow 3 Color</label>
<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_glw3_c"/>
</div>
<div class="wpmca_group wpmcarange" ng-class="{'glowhide': data.addon_theme!='5'}">
<label>Glow 3 Blur</label>
<input type="range" min="0" max="50" class="wpmchimp-range-sel" ng-model="data.theme['a'+data.addon_theme].addon_glw3_b">
</div>
</div>
<div class="wpmca_item unlhead simghead">
	<div class="itemhead">
		<h2>Subscribe to Unlock</h2>
		<span class="wpmcahint headhint" data-hint="Hide content with Subscription form"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-true-value="'1'" ng-model="data.addon_unlock">
		<div class="mcheckbox"></div>Enable Subscribe to Unlock</label>
		<span class="wpmcahint" data-hint="Enable Short Code! Ensure Double Opt-in is Enabled"></span>
		<div class="p3" style="margin: 9px 0 40px;">use - [chimpmatelock]your content[/chimpmatelock]</div>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-true-value="'1'" ng-model="data.addon_unlock_cookie">
		<div class="mcheckbox"></div>Auto Unlock if Subscribed</label>
		<span class="wpmcahint" data-hint="Check if already subscribed and Unlock the content"></span>
	</div>
	<div class="wpmca_group wpmcatxt">
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_unlock_head">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Subscribe to Unlock Heading</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_unlock_hf" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_unlock_hfs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_unlock_hfw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_unlock_hfst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_unlock_hfc"/>
	</div>
	<div class="wpmca_group wpmcatxt">
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_unlock_shead">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Subscribe to Unlock SubHeading</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_unlock_shf" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_unlock_shfs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_unlock_shfw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_unlock_shfst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_unlock_shfc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Animated Icon Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_unlock_ac"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_unlock_bc"/>
	</div>
	<div class="wpmca_group wpmcatxt">
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_unlock_vh">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Verification Header</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_unlock_vf" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_unlock_vfs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_unlock_vfw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_unlock_vfst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_unlock_vfc"/>
	</div>
	<div class="wpmca_group wpmcatxt">
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_unlock_msg">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Verification Message</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_unlock_f" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_unlock_fs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_unlock_fw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_unlock_fst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_unlock_fc"/>
	</div>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Spinner</label>
		<div class="wpmca_compac p1">
			<input id="ausp1" type="radio" value="1" ng-model="data.theme['a'+data.addon_theme].addon_unlock_s">
			<label for="ausp1" class="spindemo" ng-bind-html="getSpin('1')"></label>
		</div>
		<div class="wpmca_compac">
			<input id="ausp2" type="radio" value="2" ng-model="data.theme['a'+data.addon_theme].addon_unlock_s">
			<label for="ausp2" class="spindemo" ng-bind-html="getSpin('2')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="ausp3" type="radio" value="3" ng-model="data.theme['a'+data.addon_theme].addon_unlock_s">
			<label for="ausp3" class="spindemo" ng-bind-html="getSpin('3')"></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="ausp4" type="radio" value="4" ng-model="data.theme['a'+data.addon_theme].addon_unlock_s">
			<label for="ausp4" class="spindemo" ng-bind-html="getSpin('4')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="ausp5" type="radio" value="5" ng-model="data.theme['a'+data.addon_theme].addon_unlock_s">
			<label for="ausp5" class="spindemo" ng-bind-html="getSpin('5')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="ausp6" type="radio" value="6" ng-model="data.theme['a'+data.addon_theme].addon_unlock_s">
			<label for="ausp6" class="spindemo" ng-bind-html="getSpin('6')"></label> 
		</div>
		<div class="wpmca_compac p1">
			<input id="ausp7" type="radio" value="7" ng-model="data.theme['a'+data.addon_theme].addon_unlock_s">
			<label for="ausp7" class="spindemo" ng-bind-html="getSpin('7')"></label> 
		</div>
		<div class="wpmca_compac">
			<input id="ausp8" type="radio" value="8" ng-model="data.theme['a'+data.addon_theme].addon_unlock_s">
			<label for="ausp8" class="spindemo" ng-bind-html="getSpin('8')"></label> 
		</div>
		<div style="clear:both"></div>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Spinner Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_unlock_sc"/>
	</div>
	<div class="wpmca_group wpmcatxt">
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_unlock_ch">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Content Header</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_unlock_cf" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_unlock_cfs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_unlock_cfw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_unlock_cfst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_unlock_cfc"/>
	</div>
	<div class="wpmca_group wpmcatxt">
		<input type="text" class="wpmchimp_text" spellcheck="false" required ng-model="data.theme['a'+data.addon_theme].addon_unlock_bt">
		<span class="highlighter"></span>
		<span class="bar"></span>
		<label>Subscribe to Unlock Cancel Button</label>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="data.theme['a'+data.addon_theme].addon_unlock_btf" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" ng-model="data.theme['a'+data.addon_theme].addon_unlock_btfs" ng-options="f for f in fontsiz track by f">
				<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="data.theme['a'+data.addon_theme].addon_unlock_btfw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="data.theme['a'+data.addon_theme].addon_unlock_btfst">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Font Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_unlock_btfc"/>
	</div>
	<div class="wpmca_group wpmcacolor">
		<label>Background Color</label>
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="data.theme['a'+data.addon_theme].addon_unlock_btbc"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Filter by Device</h2>
		<span class="wpmcahint headhint" data-hint="Show Subscription box(Topbar&Flipbox excluded since only for Desktop) form if the user visits from"></span>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.addon_desktop" ng-true-value="'1'">
		<div class="mcheckbox"></div>Desktop</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.addon_tablet" ng-true-value="'1'">
		<div class="mcheckbox"></div>Tablet</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.addon_mobile" ng-true-value="'1'">
		<div class="mcheckbox"></div>Mobile</label>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Filter by Page type</h2>
		<span class="wpmcahint headhint" data-hint="Show Subscription form if the user visits?"></span>
	</div>
	<h3>Subscribe Box</h3>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.addon_page" ng-true-value="'1'">
		<div class="mcheckbox"></div>Pages</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.addon_post" ng-true-value="'1'">
		<div class="mcheckbox"></div>Posts</label>
	</div>
	<h3>Topbar</h3>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.topbar_homepage" ng-true-value="'1'">
		<div class="mcheckbox"></div>Home Page</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.topbar_blog" ng-true-value="'1'">
		<div class="mcheckbox"></div>Blog Page</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.topbar_page" ng-true-value="'1'">
		<div class="mcheckbox"></div>Pages</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.topbar_post" ng-true-value="'1'">
		<div class="mcheckbox"></div>Posts</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.topbar_category" ng-true-value="'1'">
		<div class="mcheckbox"></div>Categories/Archives</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.topbar_search" ng-true-value="'1'">
		<div class="mcheckbox"></div>Search</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.topbar_404error" ng-true-value="'1'">
		<div class="mcheckbox"></div>404 Error</label>
	</div>
	<h3>Flipbox</h3>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.flipbox_homepage" ng-true-value="'1'">
		<div class="mcheckbox"></div>Home Page</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.flipbox_blog" ng-true-value="'1'">
		<div class="mcheckbox"></div>Blog Page</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.flipbox_page" ng-true-value="'1'">
		<div class="mcheckbox"></div>Pages</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.flipbox_post" ng-true-value="'1'">
		<div class="mcheckbox"></div>Posts</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.flipbox_category" ng-true-value="'1'">
		<div class="mcheckbox"></div>Categories/Archives</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.flipbox_search" ng-true-value="'1'">
		<div class="mcheckbox"></div>Search</label>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-model="data.flipbox_404error" ng-true-value="'1'">
		<div class="mcheckbox"></div>404 Error</label>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Behaviour</h2>
		<span class="wpmcahint headhint" data-hint="Behaviour of the Subscribe Box"></span>
	</div>
	<h3>Subscribe Box</h3>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Orientation</label>
		<div class="wpmca_compac p1">
			<input id="ao1" type="radio" ng-model="data.addon_orient" value="top">
			<label for="ao1">Top <div class="orientvdemo topo"></div></label>
		</div>
		<div class="wpmca_compac">
			<input id="ao2" type="radio" ng-model="data.addon_orient" value="mid">
			<label for="ao2">Mid <div class="orientvdemo mido"></div></label> 
		</div>
		<div class="wpmca_compac">
			<input id="ao3" type="radio" ng-model="data.addon_orient" value="bot">
			<label for="ao3">Bottom <div class="orientvdemo boto"></div></label> 
		</div>
		<div style="clear:both"></div>
	</div>
	<div class="wpmca_group wpmcacb">
		<label><input type="checkbox" ng-true-value="'1'" ng-model="data.addon_scode">
		<div class="mcheckbox"></div>Enable ShortCode</label>
		<span class="wpmcahint" data-hint="Enable Short Code"></span>
		<div class="p3">use - [chimpmate]</div>
	</div>
	<h3>Topbar</h3>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Orientation</label>
		<div class="wpmca_compac p1">
			<input id="ao1" type="radio" ng-model="data.topbar_orient" value="top">
			<label for="ao1">Top <div class="orientvdemo topo"></div></label>
		</div>
		<div class="wpmca_compac">
			<input id="ao3" type="radio" ng-model="data.topbar_orient" value="bot">
			<label for="ao3">Bottom <div class="orientvdemo boto"></div></label> 
		</div>
		<div style="clear:both"></div>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb"> 
		<label><input type="checkbox" ng-model="data.topbar_behave_cookie" ng-true-value="'1'">
		<div class="mcheckbox"></div>Disappear if closed, for</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.topbar_behave_cookied">
		<span>day using Cookie</span>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb"> 
		<label><input type="checkbox" ng-model="data.topbar_behave_scookie" ng-true-value="'1'">
		<div class="mcheckbox"></div>Disappear if subscribed(using Cookie)</label>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb">
		<label><input type="checkbox" ng-true-value="'1'" ng-model="data.topbar_scode">
		<div class="mcheckbox"></div>Enable Topbar as Short Code</label>
		<span class="wpmcahint" data-hint="Topbar as Short Code works as a Horizontal bar/Single-line bar"></span>
		<div class="p3">use - [chimpmate_bar] or [chimpmate_bar height=100px]</div>
		<div class="p3">*Recommended for full-width slots only</div>
	</div>

	<h3>Flipbox</h3>
	<div class="wpmca_group wpmcacb">
		<label class="wpmcapara">Orientation</label>
		<div class="wpmca_compac p1">
			<input id="ao1" type="radio" ng-model="data.flipbox_orient" value="left">
			<label for="ao1">Left <div class="orientfdemo leftof"></div></label>
		</div>
		<div class="wpmca_compac">
			<input id="ao3" type="radio" ng-model="data.flipbox_orient" value="mid">
			<label for="ao3">Mid <div class="orientfdemo midof"></div></label> 
		</div>
		<div class="wpmca_compac">
			<input id="ao3" type="radio" ng-model="data.flipbox_orient" value="right">
			<label for="ao3">Right <div class="orientfdemo rightof"></div></label> 
		</div>
		<div style="clear:both"></div>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb"> 
		<label><input type="checkbox" ng-model="data.flipbox_behave_cookie" ng-true-value="'1'">
		<div class="mcheckbox"></div>Disappear if closed, for</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.flipbox_behave_cookied">
		<span>day using Cookie</span>
	</div>
	<div class="wpmca_group wpmcatxts wpmcacb"> 
		<label><input type="checkbox" ng-model="data.flipbox_behave_scookie" ng-true-value="'1'">
		<div class="mcheckbox"></div>Disappear if subscribed(using Cookie)</label>
	</div>
	<div class="wpmca_group wpmcatxts"> 
		<label>Appear after</label>
		<input type="text" class="wpmchimp_texts" ng-model="data.flipbox_behave_scrollp">
		<span>% of the page scrolled</span>
	</div>
</div>
<?php
	break;
	case 'statistics':
?>
<div class="wpmca_item analytics">
	<div class="wpmca_group"> 
		<h2>Instant Analytics</h2>
		<select class="wpmca_sel" ng-model="statlist" ng-options="i.id as i.name for i in data.lists">
			<option value="">{{(data.lists.length?'Select List':'No Lists')}}</option>
		</select>
		<select class="wpmca_sel" ng-model="stattheme">
			<option value="0">Last 7 Days</option>
			<option value="1">Last Week</option>
			<option value="2">Last Month</option>
			<option value="3">Last 6 Months</option>
		</select>
		<button class="wpmca_button green material-design" style="float:right;" ng-click="viewgraph($event)" id="view_chart">View Graph</button>
	</div>
</div>
<div class="wpmca_item wpmca_stat" style="width:800px">
	<div class="itemhead">
			<h2>Subscriptions</h2>
	</div>
	<div google-chart chart="subschart" style="{{cssStyle}}"></div>
</div>
<div class="wpmca_item wpmca_stat" style="width:800px">
	<div class="itemhead">
		<h2>Statistics</h2>
	</div>
	<div google-chart chart="statchart" style="{{cssStyle}}"></div>
	<div class="wpmca_group" style="margin: 60px auto 150px">
		<div class="statrate">
			<h2>Open Rate</h2>
			<div class="wpmc_progress" perc="{{orate.perc}}" style="width:{{orate.wid}}"></div>
		</div>
		<div class="statrate">
			<h2>Click Rate</h2>
			<div class="wpmc_progress" perc="{{crate.perc}}" style="width:{{crate.wid}}"></div>
		</div>
	</div>
</div>
<div class="wpmca_item wpmca_stat" style="width:800px">
	<div class="itemhead">
		<h2>Global Interest</h2>
	</div>
	<div google-chart chart="geochart" style="{{cssStyle}}"></div>
</div>
<?php
	break;
	case 'abtest':
?>
<div class="wpmca_item abtesthead simghead">
	<h2>A/B Testing</h2>
</div>
<div class="wpmca_item abtestbody">
	<div class="wpmca_group abtestsel" ng-show="ab.status<2">
		<select ng-model="abtheme" ng-multi-select multiple="multiple" ng-multi-select-placeholder="Select Themes" ng-multi-select-filter="false" ng-multi-select-width="150px" ng-multi-select-select-All="false">
			<option value="4">Smash</option>
			<option value="2">Material</option>
			<option value="7">Material Lite</option>
			<option value="3">Onamy</option>
			<option value="6">Unidesign</option>
			<option value="5">Glow</option>
			<option value="1">Epsilon</option>
			<option value="8">Nova</option>
			<option value="9">Leo</option>
			<option value="0">Basic</option>
		</select>
		<select class="wpmca_sel" style="width: 120px;" ng-model="abdur">
			<option value="7">7 Days</option>
			<option value="14">14 Days</option>
			<option value="30">30 Days</option>
		</select>
		<button class="wpmca_button green material-design" style="float:right;" ng-click="abtest(0)" id="abtest_button">Enable</button>
			<div class="abtesterr" ng-bind="abtestselerr"></div>
		</div>
		<div class="wpmca_group abtestselcon" ng-show="abselcon==1">
			<div class="abtestselconmsg">Please make sure that your selected themes are configured and customized to your needs. Are you sure?</div>
			<div class="wpmca_conbox confirm" ng-click="abtest(1)"></div>
			<div class="wpmca_conbox decline" ng-click="abtest(2)"></div>
			<div style="clear:both"></div>
		</div>
		<div class="wpmca_group abtesttime" ng-show="ab.status==2">
			<div>Check back in...</div>
			<timer interval="1000" countdown="ab.countdown" finish-callback="abendtest()">{{days}} day{{daysS}}, {{hours}} hour{{hoursS}}, {{minutes}} minute{{minutesS}}, {{seconds}} second{{secondsS}}</timer>
			<button class="wpmca_button red material-design" ng-click="abendtest(0)">End Process</button>
		</div>
		<div class="wpmca_group abtestselcon" ng-show="abendcon==1">
			<div class="abtestselconmsg">The process will be interrupted, and the recorded data will be retained though. Are you sure?</div>
			<div class="wpmca_conbox confirm" ng-click="abendtest(1)"></div>
			<div class="wpmca_conbox decline" ng-click="abendtest(2)"></div>
			<div style="clear:both"></div>
		</div>
</div>
<div class="wpmca_item" ng-show="ab.status==1">
	<div class="itemhead">
		<h2>Results</h2>
	</div>
	<div ng-show="abtestnone==1">
		<div class="wpmca_group abtestres" ng-repeat="r in ab.calc.rec | orderBy:'rate':true">
			<div class="wpmcapara">{{r.theme | themename}}</div>
			<div class="wpmc_progress" perc="{{r.rate}}%" style="width:{{r.rate*4}}px"></div>
		</div>
		<div class="vertcard">
			<h2>Got it!</h2>
			<div class="abrescont" data-pct="{{ab.calc.res.rate}}" data-theme="{{ab.calc.res.theme | themename}}">
				<svg width="161" height="126" viewPort="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg">
					<circle r="70" cx="80" cy="80" fill="transparent" stroke-dasharray="305" stroke-dashoffset="0" transform="rotate(-215 80 80)"></circle>
					<circle class="abresbar" r="70" cx="80" cy="80" fill="transparent" stroke-dasharray="305" stroke-dashoffset="0" transform="rotate(-215 80 80)"></circle>
				</svg>
			</div>
		</div>
		<div class="wpmca_group">
			<div class="wpmcapara">Great! {{ab.calc.res.theme | themename}} theme will enhance your Subscription rate...</div>
		</div>
	</div>
	<div class="wpmca_group" ng-show="abtestnone==0">
		<div class="wpmcapara">Oops! We have insufficient data to calculate the results...</div>
	</div>
</div>
<?php
	break;
	case 'advanced':
?>
<div class="wpmca_item advhead simghead">
	<div class="itemhead">
		<h2>Follow Us to get Instant Updates!<span class="show_love"></span></h2>
	</div>
	<div class="wpmca_group">
		<div class="wpmc_social" style="margin-left:120px;">
			<div class="wpmc_soc_cont fb">
				<a href="https://www.facebook.com/Voltroid"><div class="wpmc_socioicon"></div></a>
			</div>
			<div class="wpmc_soc_cont tt">
				<a href="https://twitter.com/Voltroid"><div class="wpmc_socioicon"></div></a>
			</div>
			<div class="wpmc_soc_cont gp">
				<a href="https://plus.google.com/+VoltroidInc"><div class="wpmc_socioicon"></div></a>
			</div>
		</div>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Typography Live Preview</h2>
	</div>
	<div class="wpmca_group">
		<style type="text/css">
			#wpmca_preview p{
				color:{{democolor}};
				font-family:{{demofont | livepf}};
				font-size:{{demofonts}}px;
				font-weight:{{demofontw}};
				font-style:{{demofontfs}}
			}
		</style>
		<span id="wpmca_preview">
		<p>THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG</p>
		<p>the quick brown fox jumps over the lazy dog</p>
		</span>
	</div>
	<div class="wpmca_group">
		<select class="wpmca_sel google_fonts" ng-model="demofont" ng-options="f for f in fonts track by f">
			<option value="">Font</option>
		</select>
		<select class="wpmca_sel google_fonts_size" value="20" ng-model="demofonts" ng-options="f for f in fontsiz track by f">
			<option value="">Size</option>
		</select>
		<select class="wpmca_sel google_fonts_weight" ng-model="demofontw">
			<option value="">Weight</option>
			<option value="normal">Normal</option>
			<option value="bold">Bold</option>
			<option value="lighter">Lighter</option>
			<option value="bolder">Bolder</option>
			<option value="100">100</option>
			<option value="200">200</option>
			<option value="300">300</option>
			<option value="400">400</option>
			<option value="500">500</option>
			<option value="600">600</option>
			<option value="700">700</option>
			<option value="800">800</option>
			<option value="900">900</option>
		</select>
		<select class="wpmca_sel google_fonts_style" ng-model="demofontfs">
			<option value="">Style</option>
			<option value="normal">Normal</option>
			<option value="italic">Italic</option>
			<option value="oblique">oblique</option>
		</select>
	</div>
	<div class="wpmca_group wpmcacolor">
		<input minicolors type="text" class="wpmchimp-color-sel" ng-model="democolor"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Custom CSS</h2>
	</div>
	<h3>Desktops and Large Screens</h3>
	<div class="wpmca_group">
		<div class="wpmcapara">
			<textarea ng-model="data.cssdesk"></textarea>
		</div>
	</div>
	<h3>iPads (landscape)</h3>
	<div class="wpmca_group">
		<div class="wpmcapara">
			<textarea ng-model="data.csstabl"></textarea>
		</div>
	</div>
	<h3>iPads (portrait)</h3>
	<div class="wpmca_group">
		<div class="wpmcapara">
			<textarea ng-model="data.csstabp"></textarea>
		</div>
	</div>
	<h3>Smartphones (landscape)</h3>
	<div class="wpmca_group">
		<div class="wpmcapara">
			<textarea ng-model="data.cssmobl"></textarea>
		</div>
	</div>
	<h3>Smartphones (portrait)</h3>
	<div class="wpmca_group">
		<div class="wpmcapara">
			<textarea ng-model="data.cssmobp"></textarea>
		</div>
	</div>
	<span>Use class 'chimpmatecss' to prioritize you CSS codes...</span>
</div>
<div class="wpmca_item">
	<div class="itemhead" style="text-align:center;width: 100%;">
		<h2 style="width:90%">ChimpMate Pro</h2>
	</div>
	<div class="wpmca_group wpmcapara">
		ChimpMate Pro is a MailChimp based email marketing plugin for wordpress. Mailchimp is one of the most powerful email marketing tool with more than 7 million users. Beginners can start using the service with free* account. Mailchimp also let the users to send mail to unlimited number of recipients. It is also ensures greater deliverability. Being inspired by mailchimp service we created this newsletter plugin for wordpress.org customers. It is a fully customizable plugin with professional design. The plugin offers easy installation of lightbox and widget. Hope you will like the plugin. Your feedback is appreciated.
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Back up and Restore</h2>
	</div>
	<div class="wpmca_group">
		<div class="wpmcapara">One click backup and restore 
			<span class="wpmcahint" data-hint="You can save your settings and restore it later"></span>
		</div>
	</div>
	<div class="wpmca_group">
	<button class="wpmca_button green material-design" ng-click="wpmca_backup()">Backup</button>
	<button class="wpmca_button green material-design" ng-click="wpmca_restore()">Restore</button>
	<input type="file" id="file_sel" accept=".json" style="display:none;"/>
	</div>
</div>
<div class="wpmca_item">
	<div class="itemhead">
		<h2>Reset Plugin</h2>
	</div>
	<div class="wpmca_group">
		<div class="wpmcapara">One click plugin reset 
			<span class="wpmcahint" data-hint="Reset your plugin to default values"></span>
		</div>
	</div>
	<div class="wpmca_group">
		<button class="wpmca_button green material-design" ng-click="wpmca_reset()">Reset</button>
	</div>
</div>
<?php
	break;
}