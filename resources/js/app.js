import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import timeGridPlugin from '@fullcalendar/timegrid';
import interactionPlugin from '@fullcalendar/interaction';

document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('calendar');

    let calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, timeGridPlugin, interactionPlugin],
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: '/events',  // Lấy dữ liệu sự kiện từ route /events
        editable: true,
        selectable: true,

        select: function(info) {
            showCreateCalendarModal(info.startStr, info.endStr);
        },

        // Cập nhật sự kiện
        eventDrop: function(info) {
            let event = {
                id: info.event.id,
                start: info.event.start.toISOString(),
                end: info.event.end ? info.event.end.toISOString() : null,
            };

            fetch(`/events/${event.id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify(event),
            });
        },

        eventClick: function(info) {
            const startDate = info.event.start;  // Đối tượng Date
            const formattedStartDate = startDate.toISOString().split('T')[0]; // Chuyển đổi thành định dạng YYYY-MM-DD
        
            // Cập nhật giá trị vào ô nhập ngày
            document.getElementById('event_start').value = formattedStartDate;
        
            // Nếu có ngày kết thúc, xử lý tương tự
            if (info.event.end) {
                const formattedEndDate = info.event.end.toISOString().split('T')[0];
                document.getElementById('event_end').value = formattedEndDate;
            } else {
                document.getElementById('event_end').value = ''; // Nếu không có ngày kết thúc
            }
        
            // Cập nhật tiêu đề và mô tả sự kiện
            document.getElementById('event_title').value = info.event.title;
        
            const descriptionInput = CKEDITOR.instances.editor1; // Sử dụng CKEditor với ID đúng
            if (descriptionInput) {
                descriptionInput.setData(info.event.extendedProps.description); // Cập nhật nội dung mô tả
            }
        
            // Cập nhật ID sự kiện
            document.getElementById('event_id').value = info.event.id;
        
            // Hiển thị modal
            const modal = document.querySelector('.ModelEditCalendar');
            modal.style.display = 'block';
        }
        
    });

    calendar.render();
});


// Hàm hiển thị modal để thêm mới sự kiện
function showCreateCalendarModal(startDate, endDate) {
    const modal = document.querySelector('.ModelCreateCalendar');
    
    const startDateInput = document.getElementById('start_date');
    startDateInput.value = startDate;

    const endDateInput = document.getElementById('end_date');
    endDateInput.value = endDate || startDate; 

    modal.style.display = 'block';
}




