<script>
function test() {
	$.ajax({
	url: "http://localhost/xceed/login/new_user_registration/submit",
	type:'POST',
	data:
	{
		// company: $("input[name=company]").val(),
		test: "testing"
	},
	success: function(response)
	{
		console.log(response);
	}
});
}

</script>