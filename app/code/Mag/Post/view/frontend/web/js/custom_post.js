require(["jquery", "jquery/ui"],function($) {
    $(document).ready(function() {
        $('.edit').click(function() {
            console.log(this);
            console.log(this.attributes);
            url = this.attributes['data_url'].value;
            id = this.attributes['data_id'].value;
                console.log(url);
                console.log(id);
            $.ajax({
                url: url,
                data: {postId:id},
                type: "POST",
                dataType: 'json'
            }).done(function (data) {
                console.log(data);
                $('#title').val(data.title);
                $('#author').val(data.author);
                $('#content').val(data.content);
                $('#id').val(data.id);
            });
        });

        $('.view').click(function() {
            console.log(this);
            console.log(this.attributes);
            url = this.attributes['data_url'].value;
            id = this.attributes['data_id'].value;
                console.log(url);
                console.log(id);
            $.ajax({
                url: url,
                data: {postId:id},
                type: "POST",
                dataType: 'json'
            }).done(function (data) {
                console.log(data);
                $('#selected_post').html(data.output);
            });
        });
        

    });
});