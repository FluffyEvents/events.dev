Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

var dashboard = new Vue({

    el: '#dashboard',

    // not using this yet going to handle edit form data
    data: {

        editArticle: {

            title: '', tagline: '', content: '', summary: ''
        },

        confirmDelete: false,

        submitted: false,
    },

    computed: {

    },

    ready: function() {

        this.fetchEvents();
    },

    methods: {

        // parseDate = Moment.js function that makes Carbon date object Human Readable
        parseDate: function(string) {

            var date = moment(string);

            return date.format('MMMM Do YYYY, h:mm:ss a');

        },

        fetchEvents: function() {

            this.$http.get('/getlists', function(events, data, status, request) {

                this.$set('events', events);

            }).error(function (data, status, request) {

                this.console.log(data, status, request);
            });
        },

        // not using this yet
        onClickUpdate: function(articles, index) {

            var id = articles[index]['id'];

            this.$http.put('/articles'+id, function (data, status, request) {

              this.$set(articles[index], data);

          }).error(function (data, status, request) {

              alert('Unable to edit that article') && console.log(data, status, request);

          });
        },

        onClickDelete: function(articles, index) {

            var id = articles[index]['id'];

            this.$http.delete('articles/'+id, function (data, status, request) {

                confirmDelete = true && articles.$remove(index);

            }).error(function (data, status, request){

                alert('Unable to delete that article!') && console.log(data, status, request);

            });

        },

        openEditModal: function(articles, index) {

            $('#edit-modal').addClass('active');
        },

        close: function(e) {

            $('#edit-modal').toggle('active');
        }
    },

});
