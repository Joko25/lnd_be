<body class="easyui-layout">

	<!-- Header -->
	<div data-options="region:'north', border:false" id="header">
		<div style="float: left;">
			<img src="<?= base_url('assets/image/hris.png') ?>" width="100">
		</div>

		<div class="logo-company">
			<img src="<?= $config->favicon ?>" width="50"><br>
		</div>
		<div class="name-company">
			<b style="font-size: 16px !important;"><?= $config->name ?></b><br>
			<div class="name-lisence">
				<b><?= $config->description ?></b><br>
			</div>
		</div>
		<div class="logo">
			<a onclick="approval()" href="#" title="Approval" class="notification approval">
				<i class="fa fa-check-square" style="font-size: 25px !important;"></i>
				<div id="approvalCount"></div>
			</a>
			<a onclick="notification()" href="#" title="Notification" class="notification">
				<i class="fa fa-bell" style="font-size: 25px !important;"></i>
				<div id="notificationCount"></div>
			</a>
			<a onclick="profile()" href="#" title="Profile" class="notification">
				<i class="fa fa-users" style="font-size: 25px !important;"></i>
			</a>
			<a href="#" onClick="logout()" title="Logout" class="notification">
				<i class="fa fa-share" style="font-size: 25px !important;"></i>
			</a>
		</div>
	</div>

	<!-- MAIN MENU -->
	<div data-options="region:'west',split:false, collapsed:true, hideCollapsedContent:false, title:'Main Menu'" style="width:250px; padding:10px;">
		<ul class="easyui-tree" id="menu" data-options="url:'<?= base_url('home/menus') ?>', method:'get',animate:true, lines:true"></ul>
	</div>

	<!-- USERS ONLINE -->
	<div data-options="region:'east',split:false, collapsed:true, hideCollapsedContent:false" title="Users Online" style="width:250px;">
		<div style="height: 75%; width: 100%; overflow: auto;">
			<table class="user-header" style="width: 100%;">
				<?php
				foreach ($users as $user) {
					if ($user->avatar == "") {
						$avatar = base_url('assets/image/users/default.png');
					} else {
						$avatar = $user->avatar;
					}

					$chats = $this->crud->reads("chats", [], ["from_users_id" => $user->id, "status" => 0]);
					if (count($chats) > 0) {
						$totalChats = '<div style="border-radius:50%;background:red; color:white; text-align:center;">' . count($chats) . '</div>';
					} else {
						$totalChats = '';
					}

					$startChats = "onclick='startChats(" . $user->id . ")'";
					echo '	<tr>
								<td style="padding:6px;" width="50">
									<div class="icon-container">
										<img src="' . $avatar . '" class="user-online" />
										<div class="status-circle"></div>
									</div>
								</td>
								<td>
									<a href="#" ' . $startChats . ' style="text-decoration:none;">
										<b style="font-size:12px; color:black;">' . $user->name . '</b><br>
										<small style="color:black;">' . $user->position . '</small>
									</a>
								</td>
								<td style="padding:6px; text-align:right;" width="30">
									' . $totalChats . '
								</td>
							</tr>';
				}
				?>
			</table>
		</div>
		<div style="height: 25%; width: 100%;">
			<center>
				<img src="<?= base_url('assets/image/helpdesk.png') ?>" width="240" />
				<a class="btn btn-lg btn-primary w-75" style="pointer-events: visible; opacity: 1;">SUPPORT SYSTEM</a>
			</center>
		</div>
	</div>

	<!-- FOOTER -->
	<div data-options="region:'south',border:false" style="overflow: hidden;" id="footer">
		Welcome in Application <?= $config->description ?> <b><?= $this->session->name ?></b> You are login in time <?= date("d F Y H:m:s"); ?>
		<span style="float: right;"> Copyright &copy; <?= $config->name ?> 2022 Version 1.0</span>
	</div>

	<!-- TABS AND MODULE -->
	<div data-options="region:'center'" style="width: 100%;">
		<div class="easyui-tabs" id="tabs" style="width:100%; height: 100%;">
			<div title="Dashboard">
				<iframe src="<?= base_url("dashboard/dashboard") ?>" scrolling="yes" id="page" style="border: 0; width: 100%; height: 99%; margin:0;"></iframe>
			</div>
		</div>
	</div>

	<!-- CHANGE PROFILE -->
	<div id="dlg_profile" class="easyui-dialog" title="Profile" data-options="closed: true" style="width: 400px; padding:10px; top: 20px;">
		<form id="frm_profile" method="post" enctype="multipart/form-data" novalidate>
			<fieldset style="width:100%; border:1px solid #d0d0d0; margin-bottom: 10px; border-radius:4px; float: left;">
				<legend><b>Profile Configuration</b></legend>
				<div class="fitem">
					<span style="width:35%; display:inline-block;">Username</span>
					<input style="width:60%;" name="username" id="username" value="<?= $this->session->username ?>" readonly class="easyui-textbox">
				</div>
				<div class="fitem">
					<span style="width:35%; display:inline-block;">New Password</span>
					<input style="width:60%;" name="password" id="password" class="easyui-passwordbox">
				</div>
			</fieldset>
		</form>
	</div>

	<!-- APPROVAL -->
	<div id="dlg_approval" class="easyui-dialog" title="Approvals" data-options="closed: true" style="width: 400px; height: 400px; top: 20px;">
		<ul class="list-header" id="approvalList">

		</ul>
	</div>

	<!-- APPROVAL DETAIL -->
	<div id="toolbar_approval">
		<a href="javascript:void(0)" id="approveall" class="easyui-linkbutton" data-options="plain:true" onclick="approveall()"><i class="fa fa-check"></i> Approve ALL</a>
		<a href="javascript:void(0)" id="disapproveall" class="easyui-linkbutton" data-options="plain:true" onclick="disapproveall()"><i class="fa fa-times"></i> Disapprove ALL</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" onclick="export_excel()"><i class="fa fa-file"></i> Export Excel</a>
	</div>

	<div id="dlg_approval_detail" class="easyui-window" title="Approval Confirmation" data-options="closed: true,minimizable:false,collapsible:false" style="width: 1000px; height: 400px; top: 60px;">
		<div hidden>
			<input class="easyui-textbox" id="table_name" />
			<input class="easyui-textbox" id="users_id_from" />
		</div>
		<table id="dg_approval" class="easyui-datagrid" style="width:100%;" toolbar="#toolbar_approval" data-options="fitColumns: true, rownumbers: true"></table>
	</div>

	<!-- NOTIFICATIONS -->
	<div id="dlg_notif" class="easyui-dialog" title="Notifications" data-options="closed: true" style="width: 400px; height: 400px; top: 20px;">
		<ul class="list-header" id="notificationList">

		</ul>
	</div>

	<!-- CHATS -->
	<div id="dlg_chats" class="easyui-dialog" title="Chats" data-options="closed: true, cls:'c2',border:'thin'" style="width: 400px; height: 600px; top: 60px;">
		<div style="width: 100%;">
			<div style="position: absolute; top: 35px; margin:5px; width: 100%;">
				<table style="width: 100%;">
					<tr>
						<td style="padding:5px;" width="50">
							<div class="icon-container">
								<img src="<?= base_url('assets/image/users/default.png') ?>" class="user-online" width="100" />
								<div class="status-circle"></div>
							</div>
						</td>
						<td>
							<a href="#" style="text-decoration:none;">
								<b style="font-size:12px; color:black;" id="chatName">Name</b><br>
								<small style="color:black;" id="chatPosition">Position</small>
							</a>
						</td>
					</tr>
				</table>
				<hr>
			</div>
			<div style="margin-top: 60px; height: 450px; overflow: auto;" id="messageChats">

			</div>
			<div style="position: absolute; bottom: 0px; margin:10px; width: 93%;">
				<input class="form-control w-100" id="to_users_id" hidden />
				<input class="form-control w-100" id="inputChats" autocomplete="false" autofocus placeholder="Type Message..." />
			</div>
		</div>
	</div>
</body>

<script>
	$(function() {
		$('#dlg_profile').dialog({
			buttons: [{
				text: 'Save Changes',
				iconCls: 'icon-ok',
				handler: function() {
					$('#frm_profile').form('submit', {
						url: '<?= base_url('home/updateProfile') ?>',
						onSubmit: function() {
							return $(this).form('validate');
						},
						success: function(result) {
							var result = eval('(' + result + ')');

							if (result.theme == "success") {
								toastr.success(result.message, result.title);
							} else {
								toastr.error(result.message, result.title);
							}

							$('#dlg_profile').dialog('close');
						}
					});
				}
			}]
		});
	});

	$('#menu').tree({
		url: '<?= base_url('home/menus') ?>',
		method: 'get',
		animate: 'true',
		lines: 'true',
		loadFilter: function(rows) {
			return convert(rows);
		},
		onSelect: function(node) {
			var node = $(this).tree('getSelected');
			if (node) {
				var nama = node.text;
				var link = node.link;
				var id = node.id;
				if (node.attributes) {
					link += "," + node.attributes.p1 + "," + node.attributes.p2;
					nama += "," + node.attributes.p1 + "," + node.attributes.p2;
					id += "," + node.attributes.p1 + "," + node.attributes.p2;
				}
				if ($('#tabs').tabs('exists', nama)) {
					$('#tabs').tabs('select', nama);
				} else {
					if (link == null || link == "") {
						return false;
					} else {
						var content = '<iframe src="' + link + '/index/' + window.btoa(id) + '" scrolling="yes" id="page" style="border: 0; width: 100%; height: 99%; margin:0;"></iframe>';
						//$('#form').panel('setTitle', nama);
						$('#tabs').tabs('add', {
							title: nama,
							content: content,
							closable: true,
							iconCls: node.iconCls
						});
					}
				}
			}
		}
	});

	function convert(rows) {
		function exists(rows, parentId) {
			for (var i = 0; i < rows.length; i++) {
				if (rows[i].id == parentId) return true;
			}
			return false;
		}

		var nodes = [];
		// get the top level nodes
		for (var i = 0; i < rows.length; i++) {
			var row = rows[i];
			if (!exists(rows, row.menus_id)) {
				nodes.push({
					id: row.id,
					text: row.name,
					link: row.link,
					state: row.state,
					iconCls: row.icon
				});
			}
		}

		var toDo = [];
		for (var i = 0; i < nodes.length; i++) {
			toDo.push(nodes[i]);
		}
		while (toDo.length) {
			var node = toDo.shift(); // the parent node
			// get the children nodes
			for (var i = 0; i < rows.length; i++) {
				var row = rows[i];
				if (row.state != "closed") {
					if (row.icon != "") {
						var iconCls = row.icon;
					} else {
						var iconCls = "icon-file";
					}
				} else {
					var iconCls = "";
				}
				if (row.menus_id == node.id) {
					var child = {
						id: row.id,
						text: row.name,
						link: row.link,
						state: row.state,
						iconCls: iconCls
					};
					if (node.children) {
						node.children.push(child);
					} else {
						node.children = [child];
					}
					toDo.push(child);
				}
			}
		}
		return nodes;
	}

	function startChats(user_id) {
		$("#to_users_id").val(user_id);
		$("#dlg_chats").dialog('open');
		var h = $("#messageChats").get(0).scrollHeight;
		$("#messageChats").animate({
			scrollTop: h
		});
		$('#inputChats').focus();

		$.messager.progress({
			title: 'Please waiting',
			msg: 'Open Chat...'
		});

		$.ajax({
			type: "post",
			url: "<?= base_url('admin/users/readId') ?>",
			data: "id=" + user_id,
			dataType: "json",
			success: function(user) {
				$("#chatName").html(user.name);
				$("#chatPosition").html(user.position);
			}
		});

		$.ajax({
			type: "post",
			url: "<?= base_url('home/chats') ?>",
			data: "to_users_id=" + user_id,
			dataType: "html",
			success: function(chats) {
				$("#messageChats").html(chats);
				$.messager.progress('close');
			}
		});
	}

	$('#inputChats').keypress(function(e) {
		if (e.which == 13) {
			var inputChats = $(this).val();
			var to_users_id = $("#to_users_id").val();

			if (inputChats == "") {
				toastr.error("Message empty");
			} else {
				$.ajax({
					type: "post",
					url: "<?= base_url('home/createChats') ?>",
					data: "to_users_id=" + to_users_id + "&messages=" + inputChats,
					dataType: "json",
					success: function(response) {
						toastr.success("Message has been sent");
						startChats(to_users_id);
						$("#inputChats").val('');
						$("#inputChats").focus();
					}
				});
			}
		}
	});

	function profile() {
		$('#dlg_profile').dialog('open');
	}

	function approval() {
		$('#dlg_approval').dialog('open');
	}

	approvalList();
	approvalCount();
	setInterval(approvalList, 10000);
	setInterval(approvalCount, 10000);

	function approvalList() {
		$.ajax({
			type: "post",
			url: "<?= base_url('approvals/approvalList') ?>",
			dataType: "html",
			success: function(response) {
				$('#approvalList').html(response);
			}
		});
	}

	function approvalCount() {
		$.ajax({
			type: "post",
			url: "<?= base_url('approvals/approvalCount') ?>",
			dataType: "html",
			success: function(response) {
				$('#approvalCount').html(response);
			}
		});
	}

	function approvalDetail(table = "", users_id_from = "") {
		if (table == "" || users_id_from == "") {
			toastr.error("Notification Cannot get Data", "Error");
		} else {
			$('#dlg_approval_detail').window('open');
			$("#table_name").textbox('setValue', table);
			$("#users_id_from").textbox('setValue', users_id_from);
			$("#approveall").linkbutton('enable');
			$("#disapproveall").linkbutton('enable');

			if (table == "users") {
				$('#dg_approval').datagrid({
					singleSelect: true,
					rownumbers: true,
					url: '<?= base_url('approvals/approvalUsers/') ?>' + users_id_from,
					columns: [
						[{
							field: 'number',
							width: 120,
							halign: 'center',
							title: "User ID",
						}, {
							field: 'name',
							width: 150,
							halign: 'center',
							title: "Name"
						}, {
							field: 'description',
							width: 150,
							halign: 'center',
							title: "Description"
						}, {
							field: 'username',
							width: 100,
							halign: 'center',
							title: "Username",
						}, {
							field: 'email',
							width: 120,
							halign: 'center',
							title: "Email",
						}, {
							field: 'phone',
							width: 100,
							halign: 'center',
							title: "Phone",
						}, {
							field: 'position',
							width: 100,
							halign: 'center',
							title: "Position",
						}, {
							field: 'created_by',
							width: 100,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'created_date',
							width: 100,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'action',
							width: 80,
							align: 'center',
							title: "Action",
							formatter: function(val, row) {
								if (val != "-") {
									var approve = "approve('" + row.id + "','" + table + "')";
									var disapprove = "disapprove('" + row.id + "','" + table + "')";
									var a = '<a class="btn btn-success w-50" style="pointer-events: visible; opacity:1;" onclick="' + approve + '"><i class="fa fa-check"></i></a>';
									var b = '<a class="btn btn-danger w-50" style="pointer-events: visible; opacity:1;" onclick="' + disapprove + '"><i class="fa fa-times"></i></a>';
									return a + " " + b;
								}
							}
						}]
					],
				}).datagrid('enableFilter');
			} else if (table == "employees") {
				$('#dg_approval').datagrid({
					singleSelect: true,
					rownumbers: true,
					url: '<?= base_url('approvals/approvalEmployees/') ?>' + users_id_from,
					columns: [
						[{
							field: 'number',
							width: 120,
							halign: 'center',
							title: "Employee ID",
						}, {
							field: 'name',
							width: 150,
							halign: 'center',
							title: "Employee Name"
						}, {
							field: 'division_name',
							width: 150,
							halign: 'center',
							title: "Division"
						}, {
							field: 'departement_name',
							width: 150,
							halign: 'center',
							title: "Departement",
						}, {
							field: 'departement_sub_name',
							width: 150,
							halign: 'center',
							title: "Departement Sub",
						}, {
							field: 'position_name',
							width: 100,
							halign: 'center',
							title: "Position",
						}, {
							field: 'contract_name',
							width: 100,
							halign: 'center',
							title: "Employee Type",
						}, {
							field: 'date_sign',
							width: 100,
							halign: 'center',
							title: "Join Date",
						}, {
							field: 'date_expired',
							width: 100,
							halign: 'center',
							title: "Contract Expired",
						}, {
							field: 'created_by',
							width: 100,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'created_date',
							width: 100,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'action',
							width: 80,
							align: 'center',
							title: "Action",
							formatter: function(val, row) {
								if (val != "-") {
									var approve = "approve('" + row.id + "','" + table + "')";
									var disapprove = "disapprove('" + row.id + "','" + table + "')";
									var a = '<a class="btn btn-success w-50" style="pointer-events: visible; opacity:1;" onclick="' + approve + '"><i class="fa fa-check"></i></a>';
									var b = '<a class="btn btn-danger w-50" style="pointer-events: visible; opacity:1;" onclick="' + disapprove + '"><i class="fa fa-times"></i></a>';
									return a + " " + b;
								}
							}
						}]
					],
				}).datagrid('enableFilter');
			} else if (table == "agreements") {
				$('#dg_approval').datagrid({
					singleSelect: true,
					rownumbers: true,
					url: '<?= base_url('approvals/approvalAgreements/') ?>' + users_id_from,
					columns: [
						[{
							field: 'number',
							width: 120,
							halign: 'center',
							title: "Employee ID",
						}, {
							field: 'employee_name',
							width: 150,
							halign: 'center',
							title: "Employee Name"
						}, {
							field: 'division_name',
							width: 150,
							halign: 'center',
							title: "Division"
						}, {
							field: 'departement_name',
							width: 150,
							halign: 'center',
							title: "Departement",
						}, {
							field: 'departement_sub_name',
							width: 150,
							halign: 'center',
							title: "Departement Sub",
						}, {
							field: 'position_name',
							width: 100,
							halign: 'center',
							title: "Position",
						}, {
							field: 'date_sign',
							width: 100,
							halign: 'center',
							title: "Join Date",
						}, {
							field: 'date_expired',
							width: 100,
							halign: 'center',
							title: "Contract Expired",
						}, {
							field: 'note',
							width: 150,
							halign: 'center',
							title: "Note",
						}, {
							field: 'created_by',
							width: 100,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'created_date',
							width: 100,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'action',
							width: 80,
							align: 'center',
							title: "Action",
							formatter: function(val, row) {
								if (val != "-") {
									var approve = "approve('" + row.id + "','" + table + "')";
									var disapprove = "disapprove('" + row.id + "','" + table + "')";
									var a = '<a class="btn btn-success w-50" style="pointer-events: visible; opacity:1;" onclick="' + approve + '"><i class="fa fa-check"></i></a>';
									var b = '<a class="btn btn-danger w-50" style="pointer-events: visible; opacity:1;" onclick="' + disapprove + '"><i class="fa fa-times"></i></a>';
									return a + " " + b;
								}
							}
						}]
					],
				}).datagrid('enableFilter');
			} else if (table == "mutations") {
				$('#dg_approval').datagrid({
					singleSelect: true,
					rownumbers: true,
					url: '<?= base_url('approvals/approvalMutations/') ?>' + users_id_from,
					columns: [
						[{
							field: 'employee_number',
							width: 120,
							halign: 'center',
							title: "Employee ID",
						}, {
							field: 'employee_name',
							width: 150,
							halign: 'center',
							title: "Employee Name"
						}, {
							field: 'division_name',
							width: 150,
							halign: 'center',
							title: "Division"
						}, {
							field: 'departement_name',
							width: 150,
							halign: 'center',
							title: "Departement",
						}, {
							field: 'departement_sub_name',
							width: 150,
							halign: 'center',
							title: "Departement Sub",
						}, {
							field: 'trans_date',
							width: 100,
							halign: 'center',
							title: "Trans Date",
						}, {
							field: 'type',
							width: 100,
							halign: 'center',
							title: "Type",
						}, {
							field: 'description',
							width: 150,
							halign: 'center',
							title: "Note",
						}, {
							field: 'created_by',
							width: 100,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'created_date',
							width: 100,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'action',
							width: 80,
							align: 'center',
							title: "Action",
							formatter: function(val, row) {
								if (val != "-") {
									var approve = "approve('" + row.id + "','" + table + "')";
									var disapprove = "disapprove('" + row.id + "','" + table + "')";
									var a = '<a class="btn btn-success w-50" style="pointer-events: visible; opacity:1;" onclick="' + approve + '"><i class="fa fa-check"></i></a>';
									var b = '<a class="btn btn-danger w-50" style="pointer-events: visible; opacity:1;" onclick="' + disapprove + '"><i class="fa fa-times"></i></a>';
									return a + " " + b;
								}
							}
						}]
					],
				}).datagrid('enableFilter');
			} else if (table == "employee_requests") {
				$('#dg_approval').datagrid({
					singleSelect: true,
					rownumbers: true,
					url: '<?= base_url('approvals/approvalEmployeeRequests/') ?>' + users_id_from,
					columns: [
						[{
							field: 'request_by',
							width: 120,
							halign: 'center',
							title: "Request By",
						}, {
							field: 'request_date',
							width: 100,
							halign: 'center',
							title: "Request Date"
						}, {
							field: 'due_date',
							width: 100,
							halign: 'center',
							title: "Due Date"
						}, {
							field: 'division_name',
							width: 150,
							halign: 'center',
							title: "Division"
						}, {
							field: 'departement_name',
							width: 150,
							halign: 'center',
							title: "Departement",
						}, {
							field: 'departement_sub_name',
							width: 150,
							halign: 'center',
							title: "Departement Sub",
						}, {
							field: 'qty',
							width: 100,
							halign: 'center',
							title: "Qty",
						}, {
							field: 'description',
							width: 150,
							halign: 'center',
							title: "Note",
						}, {
							field: 'created_by',
							width: 100,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'created_date',
							width: 100,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'action',
							width: 80,
							align: 'center',
							title: "Action",
							formatter: function(val, row) {
								if (val != "-") {
									var approve = "approve('" + row.id + "','" + table + "')";
									var disapprove = "disapprove('" + row.id + "','" + table + "')";
									var a = '<a class="btn btn-success w-50" style="pointer-events: visible; opacity:1;" onclick="' + approve + '"><i class="fa fa-check"></i></a>';
									var b = '<a class="btn btn-danger w-50" style="pointer-events: visible; opacity:1;" onclick="' + disapprove + '"><i class="fa fa-times"></i></a>';
									return a + " " + b;
								}
							}
						}]
					],
				}).datagrid('enableFilter');
			} else if (table == "permits") {
				$('#dg_approval').datagrid({
					singleSelect: true,
					rownumbers: true,
					url: '<?= base_url('approvals/approvalPermits/') ?>' + users_id_from,
					columns: [
						[{
							field: 'employee_number',
							width: 120,
							halign: 'center',
							title: "Employee ID",
						}, {
							field: 'employee_name',
							width: 200,
							halign: 'center',
							title: "Employee Name",
						}, {
							field: 'division_name',
							width: 150,
							halign: 'center',
							title: "Division",
						}, {
							field: 'departement_name',
							width: 150,
							halign: 'center',
							title: "Departement",
						}, {
							field: 'departement_sub_name',
							width: 150,
							halign: 'center',
							title: "Departement Sub",
						}, {
							field: 'permit_type_name',
							width: 100,
							halign: 'center',
							title: "Permit Type",
						}, {
							field: 'permit_date',
							width: 100,
							align: 'center',
							title: "Permit Date",
						}, {
							field: 'reason_name',
							width: 100,
							halign: 'center',
							title: "Reason",
						}, {
							field: 'note',
							width: 200,
							halign: 'center',
							title: "Note",
						}, {
							field: 'action',
							width: 80,
							align: 'center',
							title: "Action",
							formatter: function(val, row) {
								var approve = "approve('" + row.id + "','" + table + "')";
								var disapprove = "disapprove('" + row.id + "','" + table + "')";
								var a = '<a class="btn btn-success w-50" style="pointer-events: visible; opacity:1;" onclick="' + approve + '"><i class="fa fa-check"></i></a>';
								var b = '<a class="btn btn-danger w-50" style="pointer-events: visible; opacity:1;" onclick="' + disapprove + '"><i class="fa fa-times"></i></a>';
								return a + " " + b;
							}
						}]
					],
				}).datagrid('enableFilter');
			} else if (table == "overtimes") {
				$('#dg_approval').datagrid({
					singleSelect: true,
					rownumbers: true,
					url: '<?= base_url('approvals/approvalOvertimes/') ?>' + users_id_from,
					columns: [
						[{
							field: 'employee_id',
							width: 120,
							halign: 'center',
							title: "Employee ID",
						}, {
							field: 'employee_name',
							width: 200,
							halign: 'center',
							title: "Employee Name",
						}, {
							field: 'division_name',
							width: 150,
							halign: 'center',
							title: "Division",
						}, {
							field: 'departement_name',
							width: 150,
							halign: 'center',
							title: "Departement",
						}, {
							field: 'departement_sub_name',
							width: 150,
							halign: 'center',
							title: "Departement Sub",
						}, {
							field: 'trans_date',
							width: 100,
							halign: 'center',
							title: "Trans Date",
						}, {
							field: 'start',
							width: 80,
							align: 'center',
							title: "Start",
						}, {
							field: 'end',
							width: 80,
							halign: 'center',
							title: "End",
						}, {
							field: 'type',
							width: 100,
							halign: 'center',
							title: "Type",
						}, {
							field: 'duration_hour',
							width: 80,
							halign: 'center',
							title: "Duration",
						}, {
							field: 'duration_convert',
							width: 100,
							halign: 'center',
							title: "Convert",
						}, {
							field: 'amount',
							width: 100,
							halign: 'center',
							title: "Amount",
						}, {
							field: 'remarks',
							width: 200,
							halign: 'center',
							title: "Note",
						}, {
							field: 'created_by',
							width: 100,
							halign: 'center',
							title: "Created By",
						}, {
							field: 'created_date',
							width: 200,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'action',
							width: 80,
							align: 'center',
							title: "Action",
							formatter: function(val, row) {
								var approve = "approve('" + row.id + "','" + table + "')";
								var disapprove = "disapprove('" + row.id + "','" + table + "')";
								var a = '<a class="btn btn-success w-50" style="pointer-events: visible; opacity:1;" onclick="' + approve + '"><i class="fa fa-check"></i></a>';
								var b = '<a class="btn btn-danger w-50" style="pointer-events: visible; opacity:1;" onclick="' + disapprove + '"><i class="fa fa-times"></i></a>';
								return a + " " + b;
							}
						}]
					],
				}).datagrid('enableFilter');
			} else if (table == "cash_carries") {
				$('#dg_approval').datagrid({
					singleSelect: true,
					rownumbers: true,
					url: '<?= base_url('approvals/approvalCashCarries/') ?>' + users_id_from,
					columns: [
						[{
							field: 'employee_id',
							width: 120,
							halign: 'center',
							title: "Employee ID",
						}, {
							field: 'employee_name',
							width: 200,
							halign: 'center',
							title: "Employee Name",
						}, {
							field: 'departement_name',
							width: 150,
							halign: 'center',
							title: "Departement",
						}, {
							field: 'departement_sub_name',
							width: 150,
							halign: 'center',
							title: "Departement Sub",
						}, {
							field: 'trans_date',
							width: 100,
							halign: 'center',
							title: "Trans Date",
						}, {
							field: 'start',
							width: 80,
							align: 'center',
							title: "Start",
						}, {
							field: 'end',
							width: 80,
							halign: 'center',
							title: "End",
						}, {
							field: 'duration_hour',
							width: 80,
							halign: 'center',
							title: "Duration",
						}, {
							field: 'amount',
							width: 80,
							halign: 'center',
							align: 'right',
							title: "Amount",
						}, {
							field: 'plan',
							width: 100,
							halign: 'center',
							title: "Plan Output",
						}, {
							field: 'type',
							width: 100,
							halign: 'center',
							title: "Type",
						}, {
							field: 'remarks',
							width: 200,
							halign: 'center',
							title: "Note",
						}, {
							field: 'action',
							width: 80,
							align: 'center',
							title: "Action",
							formatter: function(val, row) {
								var approve = "approve('" + row.id + "','" + table + "')";
								var disapprove = "disapprove('" + row.id + "','" + table + "')";
								var a = '<a class="btn btn-success w-50" style="pointer-events: visible; opacity:1;" onclick="' + approve + '"><i class="fa fa-check"></i></a>';
								var b = '<a class="btn btn-danger w-50" style="pointer-events: visible; opacity:1;" onclick="' + disapprove + '"><i class="fa fa-times"></i></a>';
								return a + " " + b;
							}
						}]
					],
				}).datagrid('enableFilter');
			} else if (table == "change_days") {
				$('#dg_approval').datagrid({
					singleSelect: true,
					rownumbers: true,
					url: '<?= base_url('approvals/approvalChangeDays/') ?>' + users_id_from,
					columns: [
						[{
							field: 'employee_id',
							width: 120,
							halign: 'center',
							title: "Employee ID",
						}, {
							field: 'employee_name',
							width: 200,
							halign: 'center',
							title: "Employee Name",
						}, {
							field: 'division_name',
							width: 150,
							halign: 'center',
							title: "Division",
						}, {
							field: 'departement_name',
							width: 150,
							halign: 'center',
							title: "Departement",
						}, {
							field: 'departement_sub_name',
							width: 150,
							halign: 'center',
							title: "Departement Sub",
						}, {
							field: 'start',
							width: 100,
							align: 'center',
							title: "Date From",
						}, {
							field: 'end',
							width: 100,
							halign: 'center',
							title: "Date To",
						}, {
							field: 'remarks',
							width: 200,
							halign: 'center',
							title: "Note",
						}, {
							field: 'created_by',
							width: 100,
							halign: 'center',
							title: "Created By",
						}, {
							field: 'created_date',
							width: 200,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'action',
							width: 80,
							align: 'center',
							title: "Action",
							formatter: function(val, row) {
								var approve = "approve('" + row.id + "','" + table + "')";
								var disapprove = "disapprove('" + row.id + "','" + table + "')";
								var a = '<a class="btn btn-success w-50" style="pointer-events: visible; opacity:1;" onclick="' + approve + '"><i class="fa fa-check"></i></a>';
								var b = '<a class="btn btn-danger w-50" style="pointer-events: visible; opacity:1;" onclick="' + disapprove + '"><i class="fa fa-times"></i></a>';
								return a + " " + b;
							}
						}]
					],
				}).datagrid('enableFilter');
			} else if (table == "payrolls") {
				$("#approveall").linkbutton('disable');
				$("#disapproveall").linkbutton('disable');

				$('#dg_approval').datagrid({
					singleSelect: true,
					rownumbers: true,
					showFooter: true,
					url: '<?= base_url('approvals/approvalPayrolls') ?>',
					columns: [
						[{
							field: 'group_name',
							width: 150,
							halign: 'center',
							title: "Description",
						}, {
							field: 'employee',
							width: 80,
							halign: 'center',
							align: 'right',
							title: "Employee",
							formatter: numberformat
						}, {
							field: 'amount',
							width: 100,
							halign: 'center',
							align: 'right',
							title: "Amount",
							formatter: numberformat
						}, {
							field: 'name',
							width: 100,
							halign: 'center',
							title: "Created By",
						}, {
							field: 'created_date',
							width: 100,
							halign: 'center',
							title: "Created Date",
						}, {
							field: 'action',
							width: 80,
							align: 'center',
							title: "Action",
							formatter: function(val, row) {
								if (val != "-") {
									var approve = "approvePayrolls('" + row.group_id + "','" + table + "','" + btoa(row.period_start) + "','" + btoa(row.period_end) + "')";
									var disapprove = "disapprovePayrolls('" + row.group_id + "','" + table + "','" + btoa(row.period_start) + "','" + btoa(row.period_end) + "')";
									var a = '<a class="btn btn-success w-50" style="pointer-events: visible; opacity:1;" onclick="' + approve + '"><i class="fa fa-check"></i></a>';
									var b = '<a class="btn btn-danger w-50" style="pointer-events: visible; opacity:1;" onclick="' + disapprove + '"><i class="fa fa-times"></i></a>';
									return a + " " + b;
								}
							}
						}]
					],
				}).datagrid('enableFilter');
			}
		}
	}

	function export_excel() {
		$('#dg_approval').datagrid('toExcel', 'approvals.xls');
	}

	// function notification() {
	// 	$('#dlg_notif').dialog('open');
	// }

	// notificationList();
	// notificationCount();
	// setInterval(notificationList, 20000);
	// setInterval(notificationCount, 20000);

	// function notificationList() {
	// 	$.ajax({
	// 		type: "post",
	// 		url: "<?= base_url('home/notificationList') ?>",
	// 		dataType: "html",
	// 		success: function(response) {
	// 			$('#notificationList').html(response);
	// 		}
	// 	});
	// }

	// function notificationCount() {
	// 	$.ajax({
	// 		type: "post",
	// 		url: "<?= base_url('home/notificationCount') ?>",
	// 		dataType: "html",
	// 		success: function(response) {
	// 			$('#notificationCount').html(response);
	// 		}
	// 	});
	// }

	function approveall() {
		var table_name = $("#table_name").textbox('getValue');
		var users_id_from = $("#users_id_from").textbox('getValue');

		$.messager.confirm('Warning', 'Are you sure you want to approve all data?', function(r) {
			if (r) {
				$.post('<?= base_url('approvals/approveall') ?>', {
					table_name: table_name,
					users_id_from: users_id_from,
				}, function(result) {
					var result = eval('(' + result + ')');
					if (result.theme == "success") {
						toastr.success(result.message, result.title);
						$("#dg_approval").datagrid("reload");
					} else {
						toastr.error(result.message, result.title);
					}
				});
			}
		});
	}

	function disapproveall() {
		var table_name = $("#table_name").textbox('getValue');
		var users_id_from = $("#users_id_from").textbox('getValue');

		$.messager.confirm('Warning', 'Are you sure you want to disapprove all data?', function(r) {
			if (r) {
				Swal.fire({
					title: 'Please Wait for Process Disapprove',
					showConfirmButton: false,
					allowOutsideClick: false,
					allowEscapeKey: false,
					didOpen: () => {
						Swal.showLoading();
					},
				});

				$.post('<?= base_url('approvals/disapproveall') ?>', {
					table_name: table_name,
					users_id_from: users_id_from,
				}, function(result) {
					var result = eval('(' + result + ')');
					Swal.close();

					if (result.theme == "success") {
						toastr.success(result.message, result.title);
						$("#dg_approval").datagrid("reload");
					} else {
						toastr.error(result.message, result.title);
					}
				});
			}
		});
	}

	function approve(id, tablename) {
		$.messager.confirm('Warning', 'Are you sure you want to approve this data?', function(r) {
			if (r) {
				$.post('<?= base_url('approvals/approve') ?>', {
					id: id,
					tablename: tablename
				}, function(result) {
					var result = eval('(' + result + ')');
					if (result.theme == "success") {
						toastr.success(result.message, result.title);
						$("#dg_approval").datagrid("reload");
					} else {
						toastr.error(result.message, result.title);
					}
				});
			}
		});
	}

	function disapprove(id, tablename) {
		$.messager.confirm('Warning', 'Are you sure you want to disapprove this data?', function(r) {
			if (r) {
				$.post('<?= base_url('approvals/disapprove') ?>', {
					id: id,
					tablename: tablename
				}, function(result) {
					var result = eval('(' + result + ')');

					if (result.theme == "success") {
						toastr.success(result.message, result.title);
						$("#dg_approval").datagrid("reload");
					} else {
						toastr.error(result.message, result.title);
					}
				});
			}
		});
	}

	function approvePayrolls(id, tablename, period_start, period_end) {
		$.messager.confirm('Warning', 'Are you sure you want to approve this data?', function(r) {
			if (r) {
				Swal.fire({
					title: 'Please Wait to Approved Data',
					showConfirmButton: false,
					allowOutsideClick: false,
					allowEscapeKey: false,
					didOpen: () => {
						Swal.showLoading();
					},
				});

				$.post('<?= base_url('approvals/approvePayrolls') ?>', {
					id: id,
					tablename: tablename,
					period_start: period_start,
					period_end: period_end
				}, function(result) {
					var result = eval('(' + result + ')');
					if (result.theme == "success") {
						toastr.success(result.message, result.title);
						$("#dg_approval").datagrid("reload");
						Swal.close();
					} else {
						toastr.error(result.message, result.title);
						Swal.close();
					}
				});
			}
		});
	}

	function disapprovePayrolls(id, tablename, period_start, period_end) {
		$.messager.confirm('Warning', 'Are you sure you want to disapprove this data?', function(r) {
			if (r) {
				Swal.fire({
					title: 'Please Wait to Disapprove Data',
					showConfirmButton: false,
					allowOutsideClick: false,
					allowEscapeKey: false,
					didOpen: () => {
						Swal.showLoading();
					},
				});

				$.post('<?= base_url('approvals/disapprovePayrolls') ?>', {
					id: id,
					tablename: tablename,
					period_start: period_start,
					period_end: period_end
				}, function(result) {
					var result = eval('(' + result + ')');

					if (result.theme == "success") {
						toastr.success(result.message, result.title);
						$("#dg_approval").datagrid("reload");
						Swal.close();
					} else {
						toastr.error(result.message, result.title);
						Swal.close();
					}
				});
			}
		});
	}

	function logout() {
		Swal.fire({
			title: 'Please Wait for Logout System',
			showConfirmButton: false,
			allowOutsideClick: false,
			allowEscapeKey: false,
			didOpen: () => {
				Swal.showLoading();
			},
		});

		processingLogout();

		function processingLogout() {
			$.ajax({
				type: "post",
				url: "<?= base_url('login/logout') ?>",
				dataType: "html",
				success: function(response) {
					if (response == 0) {
						setTimeout(function() {
							window.location.assign("<?= base_url('login') ?>");
						}, 10000);
					} else {
						processingLogout();
					}
				}
			});
		}
	}

	function numberformat(value, row) {
		const formatter = new Intl.NumberFormat('id-ID');

		return "<b>" + formatter.format(value) + "</b>";
	}
</script>

</html>