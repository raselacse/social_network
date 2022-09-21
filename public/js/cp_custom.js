window.mydirectory = $('#base_cp_url').attr('content');
$(document).ready(function () {

    window.mydirectory = $('#base_cp_url').attr('content');
    //This counter changes remaining character
    //where 160 character message have been used
    $('.has-char-counter').keyup(function () {
        var maxchars = $(this).attr('maxlength');
        var chars = this.value.length,
                remaining = parseInt(maxchars) - parseInt(chars);
        $('#' + this.id + '-remaining').html(remaining);
    });
    //Only Number Support isNUM is call Function
    $(".only-number").keyup(function (e) {
        isNUM(this.id);
    });
    $(".cancel").click(function () {
        history.go(-1);
    });
    $('.integer-only').on('keypress', function (evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    });
    $('#SubscriptionquizeventDailyLimit').keyup(function () {

        var limit = $(this).val();
        if (isNaN(limit)) {
            alert("Only Number Supported!");
            $(this).val('');
            $('#SubscriptionquizeventQuotaOverflowMsgDiv').hide('slow');
            $('#SubscriptionquizeventQuotaOverflowMsg').val('');
        } else {
            if ((limit == '') || (limit == 0)) {
                $('#SubscriptionquizeventQuotaOverflowMsgDiv').hide('slow');
                $('#SubscriptionquizeventQuotaOverflowMsg').val('');
            } else {
                $('#SubscriptionquizeventQuotaOverflowMsgDiv').show('slow');
            }
        }

    });
    $('#SubscriptionquizeventGameoverAfter').keyup(function () {

        var limit = $(this).val();
        if (isNaN(limit)) {
            alert("Only Number Supported!");
            $(this).val('');
            $('#SubscriptionquizeventCompleteMsgDiv').hide('slow');
            $('#SubscriptionquizeventCompleteMsg').val('');
        } else {
            if ((limit == '') || (limit == 0)) {
                $('#SubscriptionquizeventCompleteMsgDiv').hide('slow');
                $('#SubscriptionquizeventCompleteMsg').val('');
            } else {
                $('#SubscriptionquizeventCompleteMsgDiv').show('slow');
            }
        }

    });
    $("#SubscriptionquizeventSendNextIfCorrect").click(function () {
        if ($(this).is(':checked')) {
            $('#SubscriptionquizeventWrongAnsMsgDiv').show('slow');
        } else {
            $('#SubscriptionquizeventWrongAnsMsgDiv').hide('slow');
            $('#SubscriptionquizeventWrongAnsMsg').val('');
        }
    });
    $(function () {

        // $("#datepicker").datepicker();
        $(".datepicker").datetimepicker({
            changeMonth: true,
            changeYear: true,
            separator: ' ',
            showSecond: true,
            dateFormat: 'yy-mm-dd',
            timeFormat: 'HH:mm:ss'
        });
    });
    //Time Picker
    $('.addtimepicker').timepicker();
    //Alert Content date Picker
    $(function () {

        $(".sentDatePicker").datetimepicker({
            minDate: ('yy-mm-dd', new Date()),
            //maxDate: new Date(2021, 11, 31, 17, 30),
            changeMonth: true,
            changeYear: true,
            separator: ' ',
            showSecond: true,
            dateFormat: 'yy-mm-dd',
            timeFormat: 'HH:mm:ss'
        });
    });
    //Report date Picker
    $(function () {

        $(".reportDatePicker").datetimepicker({
            maxDate: ('yy-mm-dd', new Date()),
            minDate: '-3y',
            changeMonth: true,
            changeYear: true,
            separator: ' ',
            showSecond: true,
            dateFormat: 'yy-mm-dd',
            timeFormat: 'HH:mm:ss'
        });
    });
    //Day Wise Daily Hit Counter Report date Picker
    $(function () {
        $('.dayreportDatePicker').datepicker({
            maxDate: ('yy-mm-dd', new Date()),
            minDate: '-3y',
            dateFormat: 'yy-mm-dd'

        });
    });
    //Rolling Content Start Date Picker
    $(function () {
        $('.rCStartdatepicker').datepicker({
            minDate: ('yy-mm-dd', new Date()),
            dateFormat: 'yy-mm-dd'

        });
    });
    //Rolling content Expire Date Picker
    $(function () {
        $('.expireDatePicker').datepicker({
            dateFormat: 'yy-mm-dd'

        });
    });
    //script for text editor tinymce
    tinymce.init({
        selector: "textarea.tinymce",
        theme: "modern",
        width: 1050,
        height: 300,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
        //content_css: "css/content.css",
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media code fullpage | forecolor backcolor emoticons",
        style_formats: [
            {title: 'Bold text', inline: 'b'},
            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
            {title: 'Example 1', inline: 'span', classes: 'example1'},
            {title: 'Example 2', inline: 'span', classes: 'example2'},
            {title: 'Table styles'},
            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]
    });
    $(".loadAlertContentInfo").click(function () {

        var contentId = this.id;
        $.ajax({
            url: mydirectory + 'SentContents/loadContentInfo/' + contentId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                //alert(response)
                $('#content-info').html(response);
            }
        });
    });
    $("#CampaignCategoryKeywordTypeId").change(function () {

        var keywordType = $('#CampaignCategoryKeywordTypeId').val();
        if (keywordType == '' || keywordType == '0') {
            alert("Keyword type must be selected!");
            return false;
        } else {
            $.ajax({
                url: mydirectory + 'CampaignCategories/displayKeywordList/' + keywordType,
                cache: false,
                method: 'POST',
                dataType: '',
                success: function (response) {
                    $('#displayKeyword').html(response);
                    $('.selectpicker').selectpicker();
                }
            });
        }
    });
    $(document).on("change", "#CampaignCategoryKeywordId", function () {

        var keywordId = $('#CampaignCategoryKeywordId').val();
        if (keywordId == '' || keywordId == '0') {
            alert("Keyword type must be selected!");
            return false;
        } else {
            $.ajax({
                url: mydirectory + 'CampaignCategories/displayCampaignList/' + keywordId,
                cache: false,
                method: 'POST',
                dataType: '',
                success: function (response) {
                    $('#displayCampaign').html(response);
                    $('.selectpicker').selectpicker();
                }
            });
        }
    });
    //check the prefix maxlenth
//    $(document).on("blur", "#CampaignReplyPrefixSize",function() {
//       //$('#CampaignReplyPrefix').val('');
//       var prefix_size =  $('#CampaignReplyPrefixSize').val();
//       $("#CampaignReplyPrefix").attr('maxlength',prefix_size);
//    });


    //Al-amin working 21-09-2015
    // CampaignReports CampaignLoad
    $(document).on("change", "#CampaignReportKeywordId", function () {

        var keywordId = $('#CampaignReportKeywordId').val();
        $.ajax({
            url: mydirectory + 'CampaignReports/loadCampaignList/' + keywordId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displaycapaign').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    // CampaignReports Incomingmsg CampaignLoad
    $(document).on("change", "#incomingkeyId", function () {
        var keywordId = $('#incomingkeyId').val();
        $.ajax({
            url: mydirectory + 'CampaignReports/incomingCamdis/' + keywordId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displaycapaign').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    $(document).on("change", "#husKeywordId", function () {
        var husKeywordId = $('#husKeywordId').val();
        $.ajax({
            url: mydirectory + 'CampaignReports/loadhuscampaignList/' + husKeywordId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#husdisplaycapaign').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //combineUnique load keyword list campaign
    $(document).on("change", "#comkeyTpId", function () {
        var comKeywordId = $('#comkeyTpId').val();
        $.ajax({
            url: mydirectory + 'CampaignReports/loadcomkeTypeList/' + comKeywordId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#comdisplaykeywordId').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //combineUnique load campaign list
    $(document).on("change", "#comkeywordId", function () {
        var comKeywordId = $('#comkeywordId').val();
        $.ajax({
            url: mydirectory + 'CampaignReports/loadcomcampaignList/' + comKeywordId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displaycomcampaignid').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //search keyword wise load
    $(".loadAlertKeyword").click(function () {

        var keyId = this.id;
        $.ajax({
            url: mydirectory + 'SearchKeywords/loadkeyword/' + keyId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                // alert(response)
                $('#content-info').html(response);
            }
        });
    });
    //user details info
    $(".userInfo").click(function () {
        var userId = this.id;
        $.ajax({
            url: mydirectory + 'Users/userdetailsinfo/' + userId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#user-info').html(response);
            }
        });
    });
    //gpk details info
    $(".gpkinfo").click(function () {
        var gpkId = this.id;
        $.ajax({
            url: mydirectory + 'Gpks/gpkdetailsinfo/' + gpkId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#gpk-info').html(response);
            }
        });
    });
    //static keyword details info
    $(".stkinfo").click(function () {
        var stkId = this.id;
        $.ajax({
            url: mydirectory + 'StaticKeywords/statickeydetailsinfo/' + stkId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#stk-info').html(response);
            }
        });
    });
    //yellowpage keyword details info
    $(".yellowInfo").click(function () {
        var yellowId = this.id;
        $.ajax({
            url: mydirectory + 'YellowPages/yellowdetailsinfo/' + yellowId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#yellow-info').html(response);
            }
        });
    });
    //3rdlabelKeywords keyword details info
    $(".thirdInfo").click(function () {
        var thirdId = this.id;
        $.ajax({
            url: mydirectory + 'ThirdLevelKeywords/thirddetailsinfo/' + thirdId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#third-info').html(response);
            }
        });
    });
    //http keyword details info
    $(".httpInfo").click(function () {
        var httpId = this.id;
        $.ajax({
            url: mydirectory + 'HttpKeywords/httpdetailsinfo/' + httpId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#http-info').html(response);
            }
        });
    });
    //quiz keyword details info
    $(".quizInfo").click(function () {
        var quizId = this.id;
        $.ajax({
            url: mydirectory + 'Quizes/quizdetailsinfo/' + quizId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#quiz-info').html(response);
            }
        });
    });
    //vote keyword details info
    $(".voteInfo").click(function () {
        var voteId = this.id;
        $.ajax({
            url: mydirectory + 'Votes/votedetailsinfo/' + voteId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#vote-info').html(response);
            }
        });
    });
    //specialQuizes keyword details info
    $(".specialInfo").click(function () {
        var specialId = this.id;
        $.ajax({
            url: mydirectory + 'SpecialQuizes/specialdetailsinfo/' + specialId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#special-info').html(response);
            }
        });
    });
    //subscriptionQuiz keyword details info
    $(".subquizInfo").click(function () {
        var specialId = this.id;
        $.ajax({
            url: mydirectory + 'SubscriptionQuizes/subquizdetailsinfo/' + specialId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#subquiz-info').html(response);
            }
        });
    });
    //rolling keyword keyword details info
    $(".rollingInfo").click(function () {
        var rollingId = this.id;
        $.ajax({
            url: mydirectory + 'RollingContents/rollingdetailsinfo/' + rollingId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#rolling-info').html(response);
            }
        });
    });
    //wap keyword keyword details info
    $(".wapInfo").click(function () {
        var wapId = this.id;
        $.ajax({
            url: mydirectory + 'WapKeywords/wapdetailsinfo/' + wapId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#wap-info').html(response);
            }
        });
    });
    //unilever keyword keyword details info
    $(".unileverInfo").click(function () {
        var unileverId = this.id;
        $.ajax({
            url: mydirectory + 'CustomizeUnilevers/unileverdetailsinfo/' + unileverId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#unilever-info').html(response);
            }
        });
    });
    //rollingpp keyword keyword details info
    $(".rollingppinfo").click(function () {
        var rollingppId = this.id;
        $.ajax({
            url: mydirectory + 'Rollingpps/rollingppdetailsinfo/' + rollingppId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#rollingpp-info').html(response);
            }
        });
    });
    //alamin dawan  January
    //gpkkeword
    $(document).on("change", "#GpkShortCodeId", function () {

        var shortCodeId = $('#GpkShortCodeId').val();
        $.ajax({
            url: mydirectory + 'Gpks/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //yellowpage
    $(document).on("change", "#YellowPageShortCodeId", function () {

        var shortCodeId = $('#YellowPageShortCodeId').val();
        $.ajax({
            url: mydirectory + 'YellowPages/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //staticKeywords
    $(document).on("change", "#StaticKeywordShortCodeId", function () {

        var shortCodeId = $('#StaticKeywordShortCodeId').val();
        $.ajax({
            url: mydirectory + 'StaticKeywords/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //3rdlabelKeywords
    $(document).on("change", "#ThirdLevelKeywordShortCodeId", function () {

        var shortCodeId = $('#ThirdLevelKeywordShortCodeId').val();
        $.ajax({
            url: mydirectory + 'ThirdLevelKeywords/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //httpKeywords
    $(document).on("change", "#HttpKeywordShortCodeId", function () {

        var shortCodeId = $('#HttpKeywordShortCodeId').val();
        $.ajax({
            url: mydirectory + 'HttpKeywords/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //Quizes
    $(document).on("change", "#QuizShortCodeId", function () {

        var shortCodeId = $('#QuizShortCodeId').val();
        $.ajax({
            url: mydirectory + 'Quizes/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //Vote
    $(document).on("change", "#VoteShortCodeId", function () {

        var shortCodeId = $('#VoteShortCodeId').val();
        $.ajax({
            url: mydirectory + 'Votes/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //specialQuizes
    $(document).on("change", "#SpecialQuizShortCodeId", function () {

        var shortCodeId = $('#SpecialQuizShortCodeId').val();
        $.ajax({
            url: mydirectory + 'SpecialQuizes/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //subscriptionquize
    $(document).on("change", "#SubscriptionQuizShortCodeId", function () {

        var shortCodeId = $('#SubscriptionQuizShortCodeId').val();
        $.ajax({
            url: mydirectory + 'SubscriptionQuizes/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //rollingcontent
    $(document).on("change", "#RollingContentShortCodeId", function () {

        var shortCodeId = $('#RollingContentShortCodeId').val();
        $.ajax({
            url: mydirectory + 'RollingContents/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //rollingcontent
    $(document).on("change", "#WapKeywordShortCodeId", function () {

        var shortCodeId = $('#WapKeywordShortCodeId').val();
        $.ajax({
            url: mydirectory + 'WapKeywords/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //customizeUnilevers
    $(document).on("change", "#KeywordShortCodeId", function () {

        var shortCodeId = $('#KeywordShortCodeId').val();
        $.ajax({
            url: mydirectory + 'CustomizeUnilevers/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //customizeUnilevers
    $(document).on("change", "#RollingppShortCodeId", function () {

        var shortCodeId = $('#RollingppShortCodeId').val();
        $.ajax({
            url: mydirectory + 'Rollingpps/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //promotions
    $(document).on("change", "#PromotionShortCodeId", function () {

        var shortCodeId = $('#PromotionShortCodeId').val();
        $.ajax({
            url: mydirectory + 'Promotions/getshortcodeoperator/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayOperator').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //shortcode wise operator load
    $(document).on('click', '.service_field', function () {
        var data = $(this).data('op');
        if ($(this).is(':checked')) {
            $('.' + data + '_box').show();
        } else {
            $('.' + data + '_box').hide();
        }
    });
    //loadOperators in schedualcontents
    $(document).on("change", "#RollingcontentscheduleKeywordId", function () {

        var keywordId = $('#RollingcontentscheduleKeywordId').val();
        if (keywordId == 0) {
            $("#displayOperator").fadeOut(1000);
        } else {
            $.ajax({
                url: mydirectory + 'Rollingcontentschedules/loadoperator/' + keywordId,
                cache: false,
                method: 'POST',
                dataType: '',
                success: function (response) {
                    $("#displayOperator").fadeOut(10);
                    $("#displayOperator").fadeIn(1000);
                    $('#displayOperator').html(response);
                    $('.selectpicker').selectpicker();
                }
            });
        }

    });
    //loadOperators in alert view SentContent
    $(document).on("change", "#SentContentDataKeywordId", function () {

        var keywordId = $('#SentContentDataKeywordId').val();
        if (keywordId == 0) {
            $("#displayOperator").fadeOut(1000);
        } else {
            $.ajax({
                url: mydirectory + 'SentContents/loadoperator/' + keywordId,
                cache: false,
                method: 'POST',
                dataType: '',
                success: function (response) {
                    $("#displayOperator").fadeOut(10);
                    $("#displayOperator").fadeIn(1000);
                    $('#displayOperator').html(response);
                    $('.selectpicker').selectpicker();
                }
            });
        }

    });
    /*****Added by iqbal 10-03-2016******/
    //combineUnique load campaign list
    $(document).on("change", "#rechargeCampaignKeywordId", function () {
        var comKeywordId = $('#rechargeCampaignKeywordId').val();
        $.ajax({
            url: mydirectory + 'RechargeCampaignReports/loadrechargecampaignlist/' + comKeywordId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displaycomcampaignid').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    //Salse report load campaign list
    $(document).on("change", "#salseReportKeywordId", function () {
        var comKeywordId = $('#salseReportKeywordId').val();
        $.ajax({
            url: mydirectory + 'SalesReports/loadcampaignlistsales/' + comKeywordId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displaycomcampaignid').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
    $(document).on("change", "#TransactionReportKeywordId", function () {
        var keywordId = $('#TransactionReportKeywordId').val();
        $.ajax({
            url: mydirectory + 'TransactionReports/loadtransactionrptscamplist/' + keywordId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displaycomcampaignid').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    });
}); //end jquery


function postwithajax(msgId, statusId) {

    var checkboxValue = $('#' + statusId).is(':checked');
    var realVal = (checkboxValue == true) ? '1' : '0';
    if (realVal == 1) {
        $('tr#msgbg_' + msgId + ' td').css('background-color', 'darkorange');
    } else {
        $('tr#msgbg_' + msgId + ' td').css('background-color', '');
        $('tr#msgbg_' + msgId + '').removeClass("checkMsgBg");
    }

    $.ajax({
        type: 'POST',
        url: mydirectory + 'IncomingMessageRpts/messageChecked/' + msgId + '/' + realVal,
        data: '',
        success: function (data) {

        }
    });
}

//User Group Onchenge Client Selected
function loadClient() {

    var group_id = $('#UserGroupId').val();
    if (group_id <= 3) {
        $('#ProcessHaltSms').show();
    } else {
        $('#ProcessHaltSms').attr('checked', false);
        $('#ProcessHaltSms').hide();
    }
// send ajax
    $.ajax({
        url: mydirectory + 'Users/displayClient/' + group_id,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            var dataArr = response.split("::");
            var clientList = dataArr[0];
            var operatorList = dataArr[1];
            var userGroupId = dataArr[2];
            var keywordList = dataArr[3];
            if (userGroupId <= 3 || userGroupId == 6) {
                $('#displayClient').hide();
                $('#displayKeyword').hide();
            } else {
                $('#displayClient').html(clientList);
                $('#displayClient').show();
            }
            if (userGroupId == 6) {
                $('#displayKeyword').hide();
                $('#displayOperator').html(operatorList);
                $('#displayOperator').show();
            } else if (userGroupId == 7) {
                $('#displayClient').hide();
                $('#displayOperator').html(operatorList);
                $('#displayOperator').show();
                $('#displayKeyword').html(keywordList);
                $('#displayKeyword').show();
                $('#promoterStartTimeEndTime').removeClass('hidden');
            } else {
                $('#displayOperator').hide();
                $('#displayKeyword').hide();
                $('#promoterStartTimeEndTime').addClass('hidden');
            }
            $('.selectpicker').selectpicker();
        }//success
    });
}

/******* Only Number Support Function********/
function isNUM(id) {
    var container;
    container = id;
    num = document.getElementById(container).value;
    if (isNaN(num)) {
        alert("Only Number Supported!");
        document.getElementById(container).value = '';
    }
}


/*** Product Return unit cost function ***/
function unitCost() {
    var qyt = $('#productReturnQyt').val();
    var total_amount = $('#productReturnTotalAmount').val();
    if (qyt == '') {
        alert('Please, Insert Quantity!');
        $('#productReturnTotalAmount').val('');
        return false;
    } else if (total_amount == 0 || total_amount == '') {
        alert('Please, Insert Total Amount');
        $('#productReturnUnitCost').val('');
        return false;
    } else {
        var unitCost = total_amount / qyt;
        var varunitCostFloat = parseFloat(unitCost).toFixed(2);
        $('#productReturnUnitCost').val(varunitCostFloat);
        return true;
    }
}


//Check/uncheck All Items of a bunch of check box
function checkAllItem(oInput) {

    var objects = document.getElementsByTagName('input');
    for (var i = 0; i < objects.length; i++) {
        if (objects[i] != oInput) {
            objects[i].checked = oInput.checked;
        }
    }
}//function

//Check Items of a bunch of check box
function checkSingleItem(id) {
    $("#AddProductCheckall").removeAttr("checked");
}


/********** Function Startic keyword port selected parent keyword display list ********/
function loadParentStaticKeyword() {

    var port_id = $('#StaticKeywordShortCodeId').val();
    // send ajax
    $.ajax({
        url: mydirectory + 'StaticKeywords/displayParentKeyword/' + port_id,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayParentKeywordList').html(response);
            $('.selectpicker').selectpicker();
        }//success
    });
}


//**************  onSubmit Function Start **************???////

//Product Transfer
$(document).ready(function () {
    $('#tPaccept').click(function () {
        return confirm('You sure you want to transfer product accepted?');
    });
    $('#localTPaccept').click(function () {
        return confirm('You sure you want to local transfer product accepted?');
    });
    $('#refundProductAccept').click(function () {
        return confirm('You sure you want to refund transfer product accepted?');
    });
});
//User validation Insert
function uservalidation() {
    var clientId;
    var operatorId;
    var group_id = $('#UserGroupId').val();
    if (group_id == 4 || group_id == 5) {
        clientId = $('#UserClientId').val();
    }
    if (group_id == 6) {
        operatorId = $('#UserOperatorId').val();
    }
    var username = $('#UserUsername').val();
    password = $('#UserPassword').val();
    retype_password = $('#UserConfirmPaSsword').val();
    //alert(clientId);
    if (group_id == 0) {
        alert('Group must be Selected');
        return false;
    } else if (clientId == 0) {
        alert('Client must be Selected');
        return false;
    } else if (operatorId == 0) {
        alert('Operator must be Selected');
        return false;
    } else if (username == '') {
        alert('Please, Insert username');
        return false;
    } else if (password == "") {
        alert("Please, Insert Password.");
        return false;
    } else if (retype_password == "") {
        alert("Password Confirmation field is empty!");
        return false;
    } else if (password != retype_password) {
        alert("Password Confirmation does not match!");
        return false;
    } else {
        return true;
    }
}

//User validation Update
function uservalidationUpdate() {
    var clientId;
    var operatorId;
    var group_id = $('#UserGroupId').val();
    if (group_id == 4 || group_id == 5) {
        var clientId = $('#UserClientId').val();
    }
    if (group_id == 6) {
        operatorId = $('#UserOperatorId').val();
    }
    var username = $('#UserUsername').val();
    password = $('#UserPassword').val();
    retype_password = $('#UserConfirmPaSsword').val();
    if (group_id == 0) {
        alert('Group must be Selected');
        return false;
    } else if (clientId == 0) {
        alert('Client must be Selected');
        return false;
    } else if (operatorId == 0) {
        alert('Operator must be Selected');
        return false;
    } else if (username == '') {
        alert('Please, Insert username');
        return false;
    } else if (password != retype_password) {
        alert("Password Confirmation does not match!");
        return false;
    } else {
        return true;
    }
}

function loadOperatorCode() {
    var operator_id = $('#DndRangeOperatorId').val();
    if (operator_id == 0) {
        $('#DndRangeStartCode').val('');
        $('#DndRangeEndCode').val('');
        $('#DndRangeStartNumber1').val('');
        $('#DndRangeEndNumber1').val('');
    } else {
// send ajax
        $.ajax({
            url: mydirectory + 'DndRanges/displayOperatorCode/' + operator_id,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                var mobileCode = '8801' + parseInt(response);
                $('#DndRangeStartCode').val(mobileCode);
                $('#DndRangeEndCode').val(mobileCode);
                $('#DndRangeStartNumber1').val('');
                $('#DndRangeEndNumber1').val('');
            }//success
        });
    }
}

//Dnd List operator onchange operator code display
function dndListloadOperatorCode() {
    var operator_id = $('#DndOperatorId').val();
    if (operator_id == 0) {
        $('#DndFirstCode').val('');
        $('#DndLastNumber').val('');
    } else {
// send ajax
        $.ajax({
            url: mydirectory + 'Dnds/displayOperatorCode/' + operator_id,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                var mobileCode = '8801' + parseInt(response);
                $('#DndFirstCode').val(mobileCode);
                $('#DndLastNumber').val('');
            }//success
        });
    }
}

//User Acl Check Uncheck All
function checkallUncheck(value) {
    var i = 0;
    x = document.getElementsByTagName("input");
    //z = parseInt(countProperties(x)) - 3;
    z = parseInt(x.length);
    //alert(z);
    for (i = 0; i < z; i++) {
        if (value == "Checkall") {
            x[i].checked = "checked";
        } else {
            x[i].checked = "";
        }

    }
    if (value == "Checkall") {
        document.getElementById("check").value = "Uncheckall";
        document.getElementById("update_existing_users").checked = "";
    } else {
        document.getElementById("check").value = "Checkall";
    }

}

//User  Check Uncheck All
function checkallUncheckSubscriber(value) {

    var i = 0;
    x = document.getElementsByTagName("input");
    z = parseInt(x.length);
    for (i = 0; i < z; i++) {
        if (value == "Checkall") {
            x[i].checked = "checked";
        } else {
            x[i].checked = "";
        }

    }

    if (value == "Checkall") {
        document.getElementById("check").value = "Uncheckall";
        $('#show-button').css('display', 'block');
        $('#show-button').css('padding-bottom', '5px');
        $('#unsubscribeFromService').html('Unsubscribe From The Services');
    } else {
        document.getElementById("check").value = "Checkall";
        $('#show-button').css('display', 'none');
    }

}

function subscriberCheck() {

    var hasto = $('.hasTo').is(':checked');
    var totalChecked = $('form :checkbox:checked').length - 1;
    if (totalChecked > 1) {
        $('#unsubscribeFromService').html('Unsubscribe From The Services');
    } else {
        $('#unsubscribeFromService').html('Unsubscribe From The Service');
    }


    if (hasto == true) {
        $('#show-button').css('display', 'block');
        $('#show-button').css('padding-bottom', '5px');
    } else {
        $('#show-button').css('display', 'none');
    }
}

/********** Function Day Wise Hit Counter Report Keyword Tyope Select Keyword list ********/
function dayWiseRpsSelectKeyword() {

    var keywordTypeId = $('#DayWiseDailyHitCounterRptKeywordTypeId').val();
    // send ajax
    $.ajax({
        url: mydirectory + 'DayWiseDailyHitCounterRpts/displayKeywordList/' + keywordTypeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
        }//success
    });
}

/********** Function Mobile Number Wise Hit Counter Report Keyword Tyope Select Keyword list ********/
function mobileNoWiseRpsSelectKeyword() {

    var keywordTypeId = $('#MobileNumberWiseHitCounterRptKeywordTypeId').val();
    // send ajax
    $.ajax({
        url: mydirectory + 'MobileNumberWiseHitCounterRpts/displayKeywordList/' + keywordTypeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
        }//success
    });
}

/********** Function Incoming Message Wise Hit Counter Report Keyword Tyope Select Keyword list ********/
function incomingMessageRpsSelectKeyword() {

    var keywordTypeId = $('#IncomingMessageRptKeywordTypeId').val();
    // send ajax
    $.ajax({
        url: mydirectory + 'IncomingMessageRpts/displayKeywordList/' + keywordTypeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
        }//success
    });
}

/********** Function Outgoing Message Wise Hit Counter Report Keyword Type Select Keyword list ********/
function incomingMessageRpsSelectKeyword() {

    var keywordTypeId = $('#OutgoingMessageRptKeywordTypeId').val();
    // send ajax
    $.ajax({
        url: mydirectory + 'OutgoingMessageRpts/displayKeywordList/' + keywordTypeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
        }//success
    });
}

/********** Function display keyword list ********/
function displayKeywordsList() {

//return false;
    var operatorId = $('#UserToKeywordUserId').val();
    var keywordTypeId = $('#UserToKeywordKeywordTypeId').val();
    if ((operatorId == 0) || (keywordTypeId == 0)) {

        $('#showKeywordList').hide();
    }

    if ((operatorId != 0) && (keywordTypeId != 0)) {

        $("#LoadingImage").show();
        $.ajax({
            url: mydirectory + 'UserToKeywords/displayKeywordList/' + operatorId + '/' + keywordTypeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $("#LoadingImage").hide();
                $('#showKeywordList').show();
                $('#showKeywordList').html(response);
                $('.selectpicker').selectpicker();
            }//success
        });
    }

}

function assignOperator(keywordId, Id) {

    var stat = $('#' + Id).is(':checked');
    var statInt = (stat == true) ? '1' : '0';
    if (statInt == 1) {
        $('tr#assignKeywordbg_' + keywordId + ' td').css('background-color', '#b6be2a');
    } else {
        $('tr#assignKeywordbg_' + keywordId + ' td').css('background-color', '');
        $('tr#assignKeywordbg_' + keywordId + '').removeClass("checkKeywordBg");
    }

    var operatorId = $('#UserToKeywordUserId').val();
    var keywordTypeId = $('#UserToKeywordKeywordTypeId').val();
    if (operatorId == 0) {
        alert("Operator must be selected.");
        return false;
    } else if (keywordTypeId == 0) {
        alert("Keyword type must be selected.");
        return false;
    } else {

        $.ajax({
            type: 'POST',
            url: mydirectory + 'UserToKeywords/assignKeywordToOperator/' + operatorId + '/' + keywordTypeId + '/' + keywordId + '/' + statInt,
            data: '',
            success: function (data) {
                //$('#message').html(data);
            }
        });
        return true;
    }
}

//allCheck UserToKeywords
$(document).on("click", "#allCheck", function () {
    var id = $(this).attr('id');
    if ($(this).is(':checked')) {
        $('.assign-keyword').each(function () {
            var paramId = $(this).attr('id');
            var keyword = paramId.replace(/^\D+/g, '');
            $("#" + paramId).prop('checked', true);
            assignOperator(keyword, paramId);
        });
    } else {
        $('.assign-keyword').each(function () {
            var paramId = $(this).attr('id');
            var keyword = paramId.replace(/^\D+/g, '');
            $("#" + paramId).prop('checked', false);
            assignOperator(keyword, paramId);
        });
    }
});
//Service Instruction Validation Function
function serviceInstructionValidation() {
    //This MUST alert HTML content of editor.
    var instruction = tinyMCE.get('ServiceInstructionInstruction').getContent();
    var ServiceInstructionOperatorId = $("#ServiceInstructionOperatorId").val();
    var shortCode = $("#ServiceInstructionShortCodeId").val();
    if (instruction == "") {
        alert('Please, Insert Instruction');
        return false;
    } else if (ServiceInstructionOperatorId == 0 || ServiceInstructionOperatorId == "") {
        alert('Operator must be Selected');
        return false;
    } else if (shortCode == 0 || shortCode == "") {
        alert('Short Code must be Selected');
        return false;
    } else {
        return true;
    }

}

//Service Faq Validation Function
function faqValidation() {
//This MUST alert HTML content of editor.
    var FaqQuestions = tinyMCE.get('FaqQuestions').getContent();
    var FaqAnswers = tinyMCE.get('FaqAnswers').getContent();
    if (FaqQuestions == "") {
        alert('Please, Insert Question.');
        return false;
    } else if (FaqAnswers == "") {
        alert('Please, Insert Answers.');
        return false;
    } else {
        return true;
    }

}

//Service News Validation Function
function newsValidation() {
//This MUST alert HTML content of editor.
    var newsTitle = tinyMCE.get('NewsManagementTitle').getContent();
    var newsSdate = tinyMCE.get('NewsManagementStartDate').getContent();
    var newsEdate = tinyMCE.get('NewsManagementEndDate').getContent();
    if (newsTitle == "") {
        alert('Please, News Title.');
        return false;
    } else if (newsSdate == "") {
        alert('Please, Insert Start Date.');
        return false;
    } else if (newsEdate == "") {
        alert('Please, Insert End Date.');
        return false;
    } else {
        return true;
    }

}

//Block List operator onchange operator code display
function blockListloadOperatorCode() {
    var operator_id = $('#BlockOperatorId').val();
    if (operator_id == 0) {
        $('#BlockFirstCode').val('');
        $('#BlockLastNumber').val('');
    } else {
// send ajax
        $.ajax({
            url: mydirectory + 'Blocks/displayOperatorCode/' + operator_id,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                var mobileCode = '8801' + parseInt(response);
                $('#BlockFirstCode').val(mobileCode);
                $('#BlockLastNumber').val('');
            }//success
        });
    }
}

function blockRangeloadOperatorCode() {
    var operator_id = $('#BlockRangeOperatorId').val();
    if (operator_id == 0) {
        $('#BlockRangeStartCode').val('');
        $('#BlockRangeEndCode').val('');
        $('#BlockRangeStartNumber1').val('');
        $('#BlockRangeEndNumber1').val('');
    } else {
// send ajax
        $.ajax({
            url: mydirectory + 'BlockRanges/displayOperatorCode/' + operator_id,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                var mobileCode = '8801' + parseInt(response);
                $('#BlockRangeStartCode').val(mobileCode);
                $('#BlockRangeEndCode').val(mobileCode);
                $('#BlockRangeStartNumber1').val('');
                $('#BlockRangeEndNumber1').val('');
            }//success
        });
    }
}

/********** Function Special Quiz Top Score Event list ********/
function spQuizevents() {

    var keywordId = $('#SpquizlogKeywordId').val();
    // send ajax
    $.ajax({
        url: mydirectory + 'Spquizlogs/displayEventList/' + keywordId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayEvent').html(response);
            $('.selectpicker').selectpicker();
        }//success
    });
}

//TopScorerReport Validation
function topScorerReportChecksum() {

    var keywordId = $('#SpquizlogKeywordId').val();
    var eventId = $('#SpquizlogSpquizeventId').val();
    if (keywordId == 0) {
        alert('Keyword must be selected!');
        return false;
    } else if (eventId == 0) {
        alert('Event must be selected!');
        return false;
    } else {
        return true;
    }
}

function individualMsisdnReportChecksum() {

    var keywordId = $('#SpquizlogKeywordId').val();
    var eventId = $('#SpquizlogSpquizeventId').val();
    var mobile = $('#SpquizlogMobile').val();
    if (keywordId == 0) {
        alert('Keyword must be selected!');
        return false;
    } else if (eventId == 0) {
        alert('Event must be selected!');
        return false;
    } else if (mobile == '') {
        alert('Give valid mobile number!');
        return false;
    } else {
        return true;
    }
}


function loadShortCodeWiseKeyword() {

    var shortCodeId = $('#SentContentDataShortCodeId').val();
    $.ajax({
        url: mydirectory + 'SentContents/shortCodeWiseKeyword/' + shortCodeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

function loadShortCodeWiseKeywordForSchedule() {

    var shortCodeId = $('#RollingcontentscheduleShortCodeId').val();
    $.ajax({
        url: mydirectory + 'Rollingcontentschedules/shortCodeWiseKeyword/' + shortCodeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

function loaddata() {
    var keyId = $('#IncomingMessageRptKeywordTypeId').val();
    $.ajax({
        url: mydirectory + 'IncomingMessageRpts/displayKeywordList/' + keyId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#display').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

function loaddatekeword() {
    var keyTypeId = $('#DayWiseDailyHitCounterRptKeywordTypeId').val();
    $.ajax({
        url: mydirectory + 'DayWiseDailyHitCounterRpts/displayKeywordList/' + keyTypeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

function mobileNoWiseRpsSelectKeyword() {
    var keyTypeId = $('#MobileNumberWiseHitCounterRptKeywordTypeId').val();
    $.ajax({
        url: mydirectory + 'MobileNumberWiseHitCounterRpts/displayKeywordList/' + keyTypeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

function loadKeywordCReply() {
    var keywordType = $('#CampaignReplyKeywordTypeId').val();
    $.ajax({
        url: mydirectory + 'CampaignReplys/displayKeywordList/' + keywordType,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
            //Classification is 0 index selected
            $("#CampaignReplyClassificationId").val('0').trigger('change');
        }
    });
}

function loadKeywordWiseCampaign() {
    var keywordId = $('#CampaignReplyKeywordId').val();
    $.ajax({
        url: mydirectory + 'CampaignReplys/displayCampaignList/' + keywordId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayCampaign').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

function classificationWiseView() {

    var keywordType = $('#CampaignReplyKeywordTypeId').val();
    var campaignId = $('#CampaignReplyCampaignId').val();
    $.ajax({
        url: mydirectory + 'CampaignReplys/classificationView/' + keywordType + '/' + campaignId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            //$('#displayClassificationView').show();
            $('#displayClassificationView').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

//Find the campaing where keyword wise
function loadCampaign() {
    var keywordId = $('#CampaignReplyKeywordId').val();
    $.ajax({
        url: mydirectory + 'CampaignReplys/displayCampaignFilterList/' + keywordId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayCampaign').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

function loadKeywordTypeWiseInfo() {

    var keywordType = $('#CampaignKeywordTypeId').val();
    if (keywordType == '' || keywordType == '0') {
        alert("Keyword type must be selected!");
        return false;
    } else {
        $.ajax({
            url: mydirectory + 'Campaigns/displayKeywordList/' + keywordType,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayKeyword').html(response);
                if (keywordType == '1') {
                    $('#display-campaign-reply-msg').show();
                    $('#http-wrong-msg').hide();
                    $('#wrong-code-msg').hide();
                    $('#displayClassification').hide();
                } else if (keywordType == '5') {
                    $('#display-campaign-reply-msg').hide();
                    $('#http-wrong-msg').show();
                    $('#wrong-code-msg').hide();
                    $('#displayClassification').hide();
                } else if (keywordType == '3' || keywordType == '4') {
                    $('#wrong-code-msg').show();
                    $('#display-campaign-reply-msg').hide();
                    $('#http-wrong-msg').hide();
                    $('#displayClassification').show();
                } else {
                    $('#display-campaign-reply-msg').hide();
                    $('#http-wrong-msg').hide();
                    $('#wrong-code-msg').hide();
                    $('#displayClassification').hide();
                }

                $('.selectpicker').selectpicker();
            }
        });
    }

}

function loadKeywordTypeWiseFilter() {

    var keywordType = $('#CampaignKeywordTypeId').val();
    $.ajax({
        url: mydirectory + 'Campaigns/displayKeywordListFilter/' + keywordType,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

//campaignreport
function tophittercheck() {
    var keywordTypId = $('#CampaignReportKeywordTypeId').val();
    var keywordId = $('#CampaignReportKeywordId').val();
    var campaignId = $('#CampaignReportCampaignId').val();
    if (keywordTypId == 0) {
        alert('Keyword Type  Must be Selected!');
        return false;
    } else if (keywordId == 0) {
        alert('Keyword Must be Selected!');
        return false;
    } else if (campaignId == 0) {
        alert('Campaign Must be Selected!');
        return false;
    } else {
        return true;
    }

}

//campaignreport
function tophitterdetailcheck() {

    var keywordTypId = $('#CampaignReportKeywordTypeId').val();
    var keywordId = $('#CampaignReportKeywordId').val();
    var campaignId = $('#CampaignReportCampaignId').val();
    if (keywordTypId == '0') {
        alert('Keyword Type  Must be Selected!');
        return false;
    } else if (keywordId == '0') {
        alert('Keyword Must be Selected!');
        return false;
    } else if (campaignId == '0') {
        alert('Campaign Must be Selected!');
        return false;
    } else {
        return true;
    }

}



// Display on CampaignReports Keyword
function loadKeywordList() {

    var keyTypeId = $('#CampaignReportKeywordTypeId').val();
    $.ajax({
        url: mydirectory + 'CampaignReports/loadKeywordList/' + keyTypeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displaykeyword').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

// Display on CampaignReports Incomingmsg Keyword
function incomingKeydis() {
    var keywordTypeId = $('#incomingkeyTpId').val();
    //alert(keywordTypeId);
    $.ajax({
        url: mydirectory + 'CampaignReports/incomingKeydis/' + keywordTypeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displaykeyword').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

//Load Keword highest unique sender
function loadhuskeyId() {

    var husKeyTypeId = $('#husKeyTypeId').val();
    $.ajax({
        url: mydirectory + 'CampaignReports/loadhuskeywordList/' + husKeyTypeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displaykeyword').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

//heighest unique sender check
function huscheck() {

    var ketypeId = $('#husKeyTypeId').val();
    var keyId = $('#husKeywordId').val();
    var huscampaignId = $('#huscampaignId').val();
    if (ketypeId == '0') {
        alert('Keyword Type  Must be Selected!');
        return false;
    } else if (keyId == '0') {
        alert('Keyword Must be Selected!');
        return false;
    } else if (huscampaignId == '0') {
        alert('Campaign Must be Selected!');
        return false;
    } else {
        return true;
    }

}

//recharge campaign reports check
function rechargecampaigncheck() {
    var keywordId = $('#rechargeCampaignKeywordId').val();
    var campaignId = $('#RechargeCampaignReportCampaignId').val();
    var serialId = $('#RechargeCampaignReportSerialNo').val();
    var msisdnId = $('#RechargeCampaignReportMsisdn').val();
    if (keywordId == '0') {
        alert('Keyword Must be Selected!');
        return false;
    } else if (campaignId == '0') {
        alert('Campaign Must be Selected!');
        return false;
    } else if (serialId == '' && msisdnId == '') {
        alert('Please, search with msisdn or serial!');
        return false;
    } else {
        return true;
    }
}

//RollingCampaign/index.ctp on ShortCode change
function loadRollingCampaignKeyword() {

    var shortCodeId = $('#RollingCampaignShortCodeId').val();
    var requester = window.location.href.split("/");
    $.ajax({
        url: mydirectory + 'RollingCampaigns/loadRollingCampaignKeyword/' + shortCodeId + '/' + requester[5],
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

//RollingCampaign/index.ctp on ShortCode change
function loadRollingCampaignOperator() {

    var keywordId = $('#RollingCampaignKeywordId').val();
    $.ajax({
        url: mydirectory + 'RollingCampaigns/loadRollingCampaignOperator/' + keywordId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayOperator').html(response);
        }
    });
}

//RcqReport/topScore.ctp on ShortCode change
function loadRcqReportKeyword() {

    var shortCodeId = $('#RcqReportShortCodeId').val();
    $.ajax({
        url: mydirectory + 'RcqQuizReports/loadRcqReportKeyword/' + shortCodeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayKeyword').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

//RcqReport/topScore.ctp on ShortCode change
function loadRcqReportCampaign() {

    var keywordId = $('#RcqReportKeywordId').val();
    $.ajax({
        url: mydirectory + 'RcqQuizReports/loadRcqReportCampaign/' + keywordId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayCampaign').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

//RcqReport/topScore.ctp on ShortCode change
function loadRcqReportOperator() {

    var campaignId = $('#RcqReportCampaignId').val();
    $.ajax({
        url: mydirectory + 'RcqQuizReports/loadRcqReportOperator/' + campaignId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayOperator').html(response);
            $('.selectpicker').selectpicker();
        }
    });
}

//rcqTopScorerReportChecksum Validation
function rcqTopScorerReportChecksum() {

    var shortCodeId = $('#RcqReportShortCodeId').val();
    var keywordId = $('#RcqReportKeywordId').val();
    var campaignId = $('#RcqReportCampaignId').val();
    if (shortCodeId == '0') {
        alert('Short Code must be selected!');
        return false;
    } else if (keywordId == '0') {
        alert('Keyword must be selected!');
        return false;
    } else if (campaignId == '0') {
        alert('Campaign must be selected!');
        return false;
    } else {
        return true;
    }
}

//rcqQuizHistoryChecksum Validation
function rcqQuizHistoryChecksum() {

    var shortCodeId = $('#RcqReportShortCodeId').val();
    var keywordId = $('#RcqReportKeywordId').val();
    var campaignId = $('#RcqReportCampaignId').val();
    var msisdn = $('#RcqReportMsisdn').val();
    if (shortCodeId == '0') {
        alert('Short Code must be selected!');
        return false;
    } else if (keywordId == '0') {
        alert('Keyword must be selected!');
        return false;
    } else if (campaignId == '0') {
        alert('Campaign must be selected!');
        return false;
    } else if (msisdn == '') {
        alert('Please, insert MSISDN!');
        return false;
    } else {
        return true;
    }
}

function loadOperatorForPort() {

    var shortCodeId = $('#BulkAlertsShortCodeId').val();
    $.ajax({
        url: mydirectory + 'BulkAlerts/loadOperatorForPort/' + shortCodeId,
        cache: false,
        method: 'POST',
        dataType: '',
        success: function (response) {
            $('#displayOperator').html(response);
            $('.selectpicker').selectpicker();
        }
    });
    $('#displayKeyword').html('');
}

function loadKeywordForRobiBulkAlert() {

    var shortCodeId = $('#BulkAlertsShortCodeId').val();
    var operatorId = $('#BulkAlertsOperatorId').val();
    var amount = $('#BulkAlertsAmount').val();
    if (operatorId == '2' && amount == '2') {
        $.ajax({
            url: mydirectory + 'BulkAlerts/loadKeywordForRobiBulkAlert/' + operatorId + '/' + shortCodeId,
            cache: false,
            method: 'POST',
            dataType: '',
            success: function (response) {
                $('#displayKeyword').html(response);
                $('.selectpicker').selectpicker();
            }
        });
    } else {
        $('#displayKeyword').html('');
    }

}

function validateBulkAlert() {

    var shortCodeId = $('#BulkAlertsShortCodeId').val();
    var operatorId = $('#BulkAlertsOperatorId').val();
    var keywordId = $('#BulkAlertsKeywordId').val();
    var amount = $('#BulkAlertsAmount').val();
    var content = $('#BulkAlertsContent').val();
    if (shortCodeId == '0') {
        alert('Short Code must be selected!');
        return false;
    } else if (operatorId == '0') {
        alert('Operator must be selected!');
        return false;
    } else if (operatorId == '2' && amount == '2' && keywordId == '0') {
        alert('Keyword must be selected!');
        return false;
    } else if (content == '') {
        alert('Please, insert Content message!');
        return false;
    } else {

        return confirm("You can't undo this action.\n Are you sure?");
    }

}

function promotionalLinkCopy() {
  var copyText = document.getElementById("copyPromoterUrl");
  copyText.select();
  document.execCommand("Copy");
}
