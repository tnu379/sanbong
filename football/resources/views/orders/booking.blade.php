<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script>
        $(document).ready(function() {
            var yard_id = $('#yard_id').val();
            var calendar = $('#calendar').fullCalendar({
                selectAllow: function(selectInfo) {
                    var duration = moment.duration(selectInfo.end.diff(selectInfo.start));
                    return duration.asHours() <= 1;
                },
                defaultView: 'agendaWeek',
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'agendaWeek'
                },
                events: '{{ route('get-events', $id) }}',
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt("Nhập Tên");
                    if (title) {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: "{{ route('orders_store') }}",
                            // method: "POST",
                            type: 'POST',
                            data: {
                                yard_id: yard_id,
                                _token: "{{ csrf_token() }}",
                                title: title,
                                start: start,
                                end: end
                            },
                            success: function() {
                                calendar.fullCalendar('refetchEvents');
                                alert("Added Successfully");
                            }
                        })
                    }
                },
                // editable: true,
                // eventResize: function(event) {
                //     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                //     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                //     var title = event.title;
                //     var id = event.id;
                //     $.ajax({
                //         url: "{{ route('orders_update', $id) }}",
                //         type: "POST",
                //         data: {
                //             yard_id:yard_id,
                //             title: title,
                //             start: start,
                //             _token: "{{ csrf_token() }}",
                //             end: end,
                //             id: id
                //         },
                //         success: function() {
                //             calendar.fullCalendar('refetchEvents');
                //             alert('Event Update');
                //         }
                //     })
                // },

                eventDrop: function(event) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    var title = event.title;
                    var id = event.id;
                    var url = '{{ route('orders_del', ':id') }}';
                    url = url.replace(':id', id);
                    $.ajax({
                        url: url,
                        type: "GET",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            id: id
                        },
                        success: function() {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Updated");
                        }
                    });
                },

                eventClick: function(event) {
                    if (confirm("Are you sure you want to remove it?")) {
                        var id = event.id;
                        var url = '{{ route("orders_del", ":id") }}';
                        url = url.replace(':id', id);
                        $.ajax({
                            url: url,
                            type: "GET",
                            data: {
                                id: id
                            },
                            success: function() {
                                calendar.fullCalendar('refetchEvents');
                                alert("Event Removed");
                            }
                        })
                    }
                },

            });
        });
    </script>
</head>

<body>

    <br />
    <h2 align="center"><a href="{{ route('filter') }}">Booking</a></h2>
    <br />
    <input type="text" hidden="true" , id="yard_id" value="{{ $id }}">
    <div class="container">
        <div id="calendar"></div>
    </div>
</body>

</html>
