<?php
/*
 * plugin name: wordpress user interface demo
 * author: Sohag Hasan
 * */
 if(!class_exists('sohag')):
	class sohag{
		
		function __construct(){
			}
		function top_menu(){
			
			add_menu_page('user_inerface_library',__('WORDPRESS USER INTERFACE'),'activate_plugins','library_setting',array(&$this,'main_func'));
			
			
			add_submenu_page('library_setting','h2-tag',__('h2 Tag'),'activate_plugins','h2tag',array($this,'header_func'));
			
			
			add_submenu_page('library_setting','screen-icon',__('Screen Icon'),'activate_plugins','screenicon',array($this,'screen_func'));
			
			add_submenu_page('library_setting','message-show',__('Messages'),'activate_plugins','message-show',array($this,'message_func'));
			
			add_submenu_page('library_setting','buttons-show',__('Styling Buttons'),'activate_plugins','buttonshow',array($this,'button_func'));
			
			add_submenu_page('library_setting','links-show',__('Styling Links'),'activate_plugins','linkshow',array($this,'link_button'));
			
			add_submenu_page('library_setting','form-table',__('Form with Table'),'activate_plugins','formtable',array($this,'form_table_func'));
			
			add_submenu_page('library_setting','table-show',__('Only Table'),'activate_plugins','tableshow',array($this,'table_func'));
			
			add_submenu_page('library_setting','page-nav-show',__('Page Navigation'),'activate_plugins','pagenav',array($this,'page_func'));
			
					
		}
		
		
		function main_func(){
		
		?>
			<div class="wrap">
				<h2>This page will guide you how to use Wordprss UI<h2>
			</div>
		
		<?php
			}//end of main_func
			
			function header_func(){
		?>
				<h2>h2 tag without wrap class</h2>			
				<div class="wrap">				
					<h2>h2 tag within wrap class</h2>
				</div>
		<?php 
			}//end of header_func
			
			function screen_func(){
		?>		
				<div class="wrap">
					<h2>Auto generation of Icons using normal Div with class "icon32" and different fixed ids</h2>
					<div id="icon-index" class="icon32" ></div>
					<div id="icon-edit" class="icon32" ></div>
					<div id="icon-upload" class="icon32" ></div>
					<div id="icon-link-manager" class="icon32" ></div>
					<div id="icon-edit-pages" class="icon32" ></div>
					<div id="icon-edit-comments" class="icon32" ></div>
					<div id="icon-themes" class="icon32" ></div>
					<div id="icon-plugins" class="icon32" ></div>
					<div id="icon-users" class="icon32" ></div>
					<div id="icon-tools" class="icon32" ></div>
					<div id="icon-options-general" class="icon32" ></div>
					
				</div>
				<div class="wrap">
					<h2>Icon creates using screen_icon() function with different fixed parameters<h2>
				
		<?php
				screen_icon('index');
				screen_icon('edit');
				screen_icon('upload');
				screen_icon('link-manager');
				screen_icon('edit-pages');
				screen_icon('edit-comments');
				screen_icon('themes');
				screen_icon('plugins');
				screen_icon('users');
				screen_icon('tools');
				screen_icon('options-general');
				echo '</div>';
			}//end of screen_func
				
			function message_func(){
				
		?>
				<div class="wrap">
					<div id="message" class="updated">
						update message
					</div>
					<div id="message" class="error">
						error message
					</div>
				</div>
		<?php
			}//end of message_func
			
			function button_func(){
		?>		
				<div class="wrap">
					<input type="submit" value="normal" />
					<input type="submit" value="button-secondary" class="button-secondary" />
					<input type="submit" value="button-primary" class="button-primary" />
					<input type="submit" value="button-highlighted" class="button-highlighted" />
				</div>
		<?php
			}//end of button_func
			
			function form_table_func(){
		?>
				<div class="wrap">
					<form action="#" type="post">
						<table class="form-table">
							<tr valign="top">
								<th scope="row"><label for="fname">FirstName</label></th>
								<td><input type="text" maxlength="45" size="25" id="fname"></td>
							</tr>
							<tr valign="top">
								<th scope="row"><label for="lname">LastName</label></th>
								<td><input type="text" maxlength="45" size="25" id="lname"></td>
							</tr>
							<tr valign="top">
								<th scope="row"><label for="sel">LastName</label></th>
								<td>
									<select id="sel">
										<option value="orange">orange</option>
										<option value="mango">mango</option>
										<option value="jack">jackfruit</option>
									</select>
									
								</td>
							</tr>
							<tr valign="top">
								<td><input type="submit" value="Save Options" class="button-primary" /></td>
								<td><input type="reset" value="reset" class="button-secondary" /></td>
							</tr>		
							
						</table>
					</form>
				</div>
		<?php
			}//end of form-table function
			function table_func(){
		?>
				<div class="wrap">
					<table class="widefat">
						<thead>
							<tr>
								<th>Name</th>
								<th>Favorite Holiday</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Favorite Holiday</th>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td>Brad Williams</td>
								<td>Halloween</td>
							</tr>
							<tr>
								<td>Ozh Richard</td>
								<td>Talk Like a Pirate</td>
							</tr>
							<tr>
								<td>Justin Tadlock</td>
								<td>Christmas</td>
							</tr>
						</tbody>
					</table>
				</div>
		<?php
			}//end of table_show function
			
			function page_func(){
		?>
				<div class="wrap">
					<div class="tablenav">
						<div class="tablenav-pages">
							<span class="displaying-num">
								Displaying 1-20 of 69
							</span>
							<span class="page-number-current">1</span>
							<a href="#" class="page-numbers">2</a>
							<a href="#" class="page-numbers">3</a>
							<a href="#" class="page-numbers">4</a>
							<a href="#" class="page-numbers">5</a>
							<a href="#" class="page-numbers">6</a>
						</div>
					</div>
				</div>
		<?php 
			}//end of page_func
			
			function link_button(){
		?>
				<div class="wrap">
					<a href="#" >normal</a>
					<a href="#" class="button-secondary" >button-secondary</a>
					<a href="#" class="button-primary" >button-primary</a>
					<a href="#" class="button-highlighted" >button-highlighted</a>
					<h2><a href="#" class="button-primary">button-primary wrap by h2</a></h2>				
				</div>
				
			
<?php
		}//end of link_button
		
		
	}//end of the class
	
	
	$niceName = new sohag();
	add_action('admin_menu',array($niceName,'top_menu'),20);

endif;
?>
