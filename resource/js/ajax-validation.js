$(document).ready(function () {
    var validateZip = $('#validateZip');
    $('#zip').keyup(function () {
        var t = this;
        if (this.value != this.lastValue) {
            if (this.timer) clearTimeout(this.timer);
            validateZip.html('Checking validity...');

            this.timer = setTimeout(function () {
                $.ajax({
                    url: '/cs/customer/',
                    data: 'act=root->main->main->param->param->checkFormField&field=customer[address][zip]&value=' + t.value,
                    dataType: 'json',
                    type: 'post',
                    success: function (j) {
                        validateZip.html(j.msg);
                    }
                });
            }, 200);

            this.lastValue = this.value;
        }
    });
});