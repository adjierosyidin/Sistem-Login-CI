// Call the dataTables jQuery plugin
$(document).ready(function () {
	$('#dataTable').dataTable({
		"columnDefs": [{
			"targets": -1,
			"orderable": false
		}],
		"columnDefs": [{
			"targets": 3,
			"orderable": 'text-center'
		}]
	});
});
