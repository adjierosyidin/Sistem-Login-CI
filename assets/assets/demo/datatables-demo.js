// Call the dataTables jQuery plugin
$(document).ready(function () {
	$('#dataTable').dataTable({
		"columnDefs": [{
			"targets": -1,
			"orderable": false
		}]
	});
});
