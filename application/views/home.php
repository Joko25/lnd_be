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
	<div data-options="region:'east',split:false, collapsed:true, hideCollapsedContent:false" title="Users Online" style="width:200px;">
		<table class="user-header" style="width: 100%;">
			<?php
			foreach ($users as $user) {
				if ($user->avatar == "") {
					$avatar = base_url('assets/image/users/default.png');
				} else {
					$avatar = $user->avatar;
				}
				echo '	<tr>
							<td>
								<div class="icon-container">
									<img src="' . $avatar . '" class="user-online" />
									<div class="status-circle"></div>
								</div>
							</td>
							<td><a href="#" style="text-decoration:none;"><b style="font-size:12px;">' . $user->name . '</b><br><small>' . $user->position . '</small></a></td>
						</tr>';
			}
			?>
		</table>
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

	<!-- CHANGE PASSWORD -->
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

	<!-- NOTIFICATIONS -->
	<div id="dlg_notif" class="easyui-dialog" title="Notifications" data-options="closed: true" style="width: 400px; height: 400px; top: 20px;">
		<ul class="list-header" id="notificationList">

		</ul>
	</div>

	<!-- NOTIFICATION APPROVAL -->
	<div id="dlg_notif_content" class="easyui-window" title="Approval Confirmation" data-options="closed: true,minimizable:false,collapsible:false" style="width: 1000px; height: 400px; top: 60px;">

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

		notificationList();
		notificationCount();
		setInterval(notificationList, 10000);
		setInterval(notificationCount, 10000);

		function notificationList() {
			$.ajax({
				type: "post",
				url: "<?= base_url('home/notificationList') ?>",
				dataType: "html",
				success: function(response) {
					$('#notificationList').html(response);
				}
			});
		}

		function notificationCount() {
			$.ajax({
				type: "post",
				url: "<?= base_url('home/notificationCount') ?>",
				dataType: "html",
				success: function(response) {
					$('#notificationCount').html(response);
				}
			});
		}
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
							closable: true
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
					state: row.state
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
					var iconCls = "icon-document";
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

	function profile() {
		$('#dlg_profile').dialog('open');
	}

	function notification() {
		$('#dlg_notif').dialog('open');
	}

	function notificationDetail(table = "") {
		if (table == "") {
			toastr.error("Notification Cannot get Data", "Error");
		} else {
			$('#dlg_notif_content').window('open');
			$.ajax({
				type: "post",
				url: "<?= base_url('home/notificationDetail') ?>",
				data: "table_name=" + table,
				dataType: "html",
				success: function(response) {
					$('#dlg_notif_content').html(response);
				}
			});
		}
	}

	function approveall(id_all, tablename) {
		$.messager.confirm('Warning', 'Are you sure you want to approve all data?', function(r) {
			if (r) {
				requestData(id_all.length, id_all);

				function requestData(total, json, number = 0, value = 0) {
					if (value < 100) {
						var id = json[number]['id'];
						value = Math.floor((number / total) * 100);

						$.post('<?= base_url('home/approve') ?>', {
							id: id,
							tablename: tablename,
						}, function(result) {
							var result = eval('(' + result + ')');
							if (result.theme == "success") {
								toastr.success(result.message, result.title);
								$("#" + id).html("Approved");
								requestData(total, json, number + 1, value);
							} else {
								toastr.error(result.message, result.title);
							}
						});

					}
				}
			}
		});
	}

	function disapproveall(id_all, tablename) {
		$.messager.confirm('Warning', 'Are you sure you want to disapprove all data?', function(r) {
			if (r) {
				requestData(id_all.length, id_all);

				function requestData(total, json, number = 0, value = 0) {
					if (value < 100) {
						var id = json[number]['id'];
						value = Math.floor((number / total) * 100);

						$.post('<?= base_url('home/disapprove') ?>', {
							id: id,
							tablename: tablename,
						}, function(result) {
							var result = eval('(' + result + ')');

							if (result.theme == "success") {
								toastr.success(result.message, result.title);
								$("#" + id).html("Disapproved");
								requestData(total, json, number + 1, value);
							} else {
								toastr.error(result.message, result.title);
							}
						});
					}
				}
			}
		});
	}

	function approve(id, tablename) {
		$.messager.confirm('Warning', 'Are you sure you want to approve this data?', function(r) {
			if (r) {
				$.post('<?= base_url('home/approve') ?>', {
					id: id,
					tablename: tablename
				}, function(result) {
					var result = eval('(' + result + ')');
					if (result.theme == "success") {
						toastr.success(result.message, result.title);
						$("#" + id).html("Approved");
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
				$.post('<?= base_url('home/disapprove') ?>', {
					id: id,
					tablename: tablename
				}, function(result) {
					var result = eval('(' + result + ')');

					if (result.theme == "success") {
						toastr.success(result.message, result.title);
						$("#" + id).html("Disapproved");
					} else {
						toastr.error(result.message, result.title);
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
</script>

</html>