var tempId;
var tempQuestion;
var tempChoiceA;
var tempChoiceB;
var tempChoiceC;
var tempChoiceD;

function loadForward(){
	var params = "action=forward&id="+tempId+"&testQuestion="+tempQuestion+"&choiceA="+tempChoiceA+"&choiceB="+tempChoiceB+"&choiceC="+tempChoiceC+"&choiceD="+tempChoiceD;
	var url= "operator/ExamController.php";
	$.ajax({
		type: 'POST',
		url: url,
		dataType: 'html',
		data: params,
		beforeSend: function() {
			$("#load").html('<font color="aqua">loading ...</font>')
		},
		success: function(html) {
		    var out = $.parseJSON(html);
		    $("#QuestionNumber").html(out['id']);
		    $("#QuestionList").html(out['test_question']);
		    $("#Choice_A").html(out['choice_A']);
		    $("#Choice_B").html(out['choice_B']);
		    $("#Choice_C").html(out['choice_C']);
		    $("#Choice_D").html(out['choice_D']);
			tempId = out['id'];
            tempQuestion = out['test_question'];
            tempChoiceA = out['choice_A'];
            tempChoiceB = out['choice_B'];
            tempChoiceC = out['choice_C'];
            tempChoiceD = out['choice_D'];

		}
	});
}