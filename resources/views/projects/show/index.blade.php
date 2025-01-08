@extends('app')
@section('title', 'Home Page')
@section('content')
<div class="project-wrapper show-project">
    <div class="project-wrapper-right">
        <div class="task-container">
            <header class="task-header">
                <div class="domain-info">
                    <div class="domain-info-left">
                        <div class="project-image">
                            @if($project->images)
                                <img src="{{ asset($project->images) }}" alt="Project Image">
                            @else
                                <span>No image available</span>
                            @endif
                        </div>
                    </div>
                    <div class="domain-info-right">
                        <span class="domain-name">{{ $project->name }}</span>
                        <span class="plan">{{ $project->user->full_name }}</span>
                    </div>
                </div>
              <div class="task-controls">
                <input type="text" class="search-input" placeholder="Search">
                <button class="add-task-btn">
                  <i class="fa-solid fa-plus"></i> Task
                </button>
              </div>
            </header>
            <table class="task-table">
              <thead>
                <tr>
                  <th>Item</th>
                  <th>Tags</th>
                  <th>Assignees</th>
                  <th>Status</th>
                  <th>Start Date</th>
                  <th>Due Date</th>
                  <th>complete</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- Main Task -->
                <tr class="task-row">
                    <td class="expandable">
                        <button class="expand-btn"><i class="fa-solid fa-chevron-right"></i></button>
                        <span class="ml-10">Blog</span>
                    </td>
                    <td>
                        <div class="circle-container">
                            <div class="circle">
                            <div class="inner-content">
                                <div class="number">9</div>
                            </div>
                            </div>
                        </div>
                    </td>
                    <td>Unassigned</td>
                        <td>
                            <p class="status not-started">
                                Not Started
                            </p>
                        </td>
                    <td>20-10-2021</td>
                    <td>20-10-2021</td>
                    <td>
                        <button class="btn-success">Hoàn thành</button>
                    </td>
                    <td>
                        <button class="action-btn"><i class="fa-solid fa-plus"></i></button>
                        <button class="action-btn"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="sub-task hidden">
                  <td class="sub-item"><i class="fa-solid fa-arrow-right"></i> <span>Write 3 posts</span></td>
                    <td>
                        <button class="btn-stt">1</button>
                    </td>
                  <td>Maggie Sheldon</td>
                  
                    <td>
                        <p class="status completed">
                            Completed
                        </p>                    
                    </td>
                  <td>Jan 4, 2015</td>
                  <td>Jan 10, 2015</td>
                  <td>
                    <button class="btn-success">Hoàn thành</button>
                    </td>
                  <td>
                    <button class="action-btn"><i class="fa-solid fa-pen"></i></button>
                    <button class="action-btn"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>
                <tr class="sub-task hidden">
                    <td class="sub-item"><i class="fa-solid fa-arrow-right"></i> <span>Write 3 posts</span></td>
                      <td>
                          <button class="btn-stt">2</button>
                      </td>
                    <td>Maggie Sheldon</td>
                    
                      <td>
                          <p class="status completed">
                              Completed
                          </p>                    
                      </td>
                    <td>Jan 4, 2015</td>
                    <td>Jan 10, 2015</td>
                    <td>
                      <button class="btn-success">Hoàn thành</button>
                      </td>
                    <td>
                      <button class="action-btn"><i class="fa-solid fa-pen"></i></button>
                      <button class="action-btn"><i class="fa-solid fa-trash"></i></button>
                    </td>
                  </tr>
                
               
              </tbody>
            </table>
          </div>
    </div>
</div>
@if (session('success'))
<div id="popup-success">
    <ul class="notifications">
        <li class="toast success hide">
            <div class="column">
                <i class="fa-solid fa-circle-check"></i>
                <span>Success:  {{ session('success') }}.</span>
            </div>
        </li>
    </ul>
</div>
@endif

@if (session('error'))
<div id="popup-error">
    <ul class="notifications">
        <li class="toast error hide">
            <div class="column">
                <i class="fa-solid fa-circle-check"></i>
                <span>Error:  {{ session('error') }}.</span>
            </div>
        </li>
    </ul>
</div>
@endif

@if ($errors->any())
    <div id="popup-error">
        <ul class="notifications">
            @foreach ($errors->all() as $error)
                <li class="toast error hide">
                    <div class="column">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Error:  {{ $error }}.</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="model" id="">
    <div class="modelFormB">
        <form method="POST" class="modelForm" action="{{ route('issue.store') }}" enctype="multipart/form-data">
            @csrf
            <h2>{{ __('messages.Add New') }}</h2>
            @if (Auth::check())
                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
            @endif
        
            <div class="form-input-category">
                <label for="subject">{{ __('messages.Subject') }}</label>
                <input type="text" class="input-name" id="subject" name="subject">
            </div>
            <div class="form-input-category mt-10">
                <label for="start_date">{{ __('messages.Start Date') }}</label>
                <input type="date" class="input-name" id="start_date" name="start_date">
            </div>
            <div class="form-input-category  mt-10">
                <label for="end_date">{{ __('messages.End Date') }}</label>
                <input type="date" class="input-name" id="end_date" name="end_date">
            </div>
            <div class="form-select-category mt-10">
                <label for="level">{{ __('messages.Level') }}</label>
                <select name="level" id="level">
                    <option value="0">{{ __('messages.Normal') }}</option>
                    <option value="1">{{ __('messages.Important') }}</option>
                </select>
            </div>
            <div class="form-select-category mt-10">
                <label for="level">{{ __('messages.Level') }}</label>
                <select name="level" id="level">
                    <option value="0">{{ __('messages.Normal') }}</option>
                    <option value="1">{{ __('messages.Important') }}</option>
                </select>
            </div>
            <div class="form-select-category mt-10">
                <label for="level">{{ __('messages.Level') }}</label>
                <select name="level" id="level">
                    <option value="0">{{ __('messages.Normal') }}</option>
                    <option value="1">{{ __('messages.Important') }}</option>
                </select>
            </div>
            <div class="form-btn center mt-10">
                <button type="submit">{{ __('messages.Save changes') }}</button>
            </div>
        
            <div class="BtnCloseCreate" onclick="closeCreateIssuePopup()">
                <p>X</p>
            </div>
        </form>
    </div>
</div>
<script>
    ClassicEditor
      .create(document.querySelector('#editor'))
      .then(editor => {
        editorInstance = editor; 
      })
      .catch(error => {
          console.error(error);
      });
</script>
<script>

document.addEventListener('DOMContentLoaded', () => {
  const expandButtons = document.querySelectorAll('.expand-btn');

  expandButtons.forEach(button => {
    button.addEventListener('click', () => {
      const parentRow = button.closest('tr');
      let nextRow = parentRow.nextElementSibling;

      // Toggle sub-tasks associated with the clicked parent task
      let isExpanded = button.innerHTML.includes('down');

      while (nextRow && nextRow.classList.contains('sub-task')) {
        if (isExpanded) {
          nextRow.style.display = 'none'; // Hide sub-tasks
        } else {
          nextRow.style.display = 'table-row'; // Show sub-tasks
        }
        nextRow = nextRow.nextElementSibling; // Move to the next row
      }

      // Toggle the button icon
      button.innerHTML = isExpanded
        ? '<i class="fa-solid fa-chevron-right"></i>' // Collapsed
        : '<i class="fa-solid fa-chevron-down"></i>'; // Expanded
    });
  });
});
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const fileInput = document.getElementById("image");
        const fileList = document.getElementById("imageList");

        fileInput.addEventListener("change", function (event) {
            const files = event.target.files;
            fileList.innerHTML = "";
            for (const file of files) {
                const listItem = document.createElement("div");
                listItem.className = "file-list-item";
                listItem.innerHTML = `
                    <span>${file.name}</span>
                    <span>${(file.size / 1024).toFixed(1)} KB</span>
                    <span class="file-remove" data-file="${file.name}">X</span>
                `;

                fileList.appendChild(listItem);
            }

            const removeButtons = document.querySelectorAll(".file-remove");
            removeButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    const fileName = this.getAttribute("data-file");
                    const parent = this.parentElement;
                    parent.remove();
                    console.log(`Removed: ${fileName}`);
                });
            });
        });

        const dropzone = document.querySelector(".upload-container");
        dropzone.addEventListener("dragover", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#007bff";
        });

        dropzone.addEventListener("dragleave", () => {
            dropzone.style.borderColor = "#cccccc";
        });

        dropzone.addEventListener("drop", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#cccccc";

            const files = event.dataTransfer.files;
            fileInput.files = files;
            fileInput.dispatchEvent(new Event("change"));
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        const fileInput = document.getElementById("document");
        const fileList = document.getElementById("documentList");

        fileInput.addEventListener("change", function (event) {
            const files = event.target.files;
            fileList.innerHTML = "";
            for (const file of files) {
                const listItem = document.createElement("div");
                listItem.className = "file-list-item";
                listItem.innerHTML = `
                    <span>${file.name}</span>
                    <span>${(file.size / 1024).toFixed(1)} KB</span>
                    <span class="file-remove" data-file="${file.name}">X</span>
                `;

                fileList.appendChild(listItem);
            }
            const removeButtons = document.querySelectorAll(".file-remove");
            removeButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    const fileName = this.getAttribute("data-file");
                    const parent = this.parentElement;
                    parent.remove();
                    console.log(`Removed: ${fileName}`);
                });
            });
        });
        const dropzone = document.querySelector(".upload-container");
        dropzone.addEventListener("dragover", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#007bff";
        });

        dropzone.addEventListener("dragleave", () => {
            dropzone.style.borderColor = "#cccccc";
        });

        dropzone.addEventListener("drop", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#cccccc";

            const files = event.dataTransfer.files;
            fileInput.files = files;
            fileInput.dispatchEvent(new Event("change"));
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        const fileInput = document.getElementById("fileInput");
        const fileList = document.getElementById("fileList");

        fileInput.addEventListener("change", function (event) {
            const files = event.target.files;
            fileList.innerHTML = "";
            for (const file of files) {
                const listItem = document.createElement("div");
                listItem.className = "file-list-item";
                listItem.innerHTML = `
                    <span>${file.name}</span>
                    <span>${(file.size / 1024).toFixed(1)} KB</span>
                    <span class="file-remove" data-file="${file.name}">X</span>
                `;

                fileList.appendChild(listItem);
            }
            const removeButtons = document.querySelectorAll(".file-remove");
            removeButtons.forEach((button) => {
                button.addEventListener("click", function () {
                    const fileName = this.getAttribute("data-file");
                    const parent = this.parentElement;
                    parent.remove();
                    console.log(`Removed: ${fileName}`);
                });
            });
        });
        const dropzone = document.querySelector(".upload-container");
        dropzone.addEventListener("dragover", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#007bff";
        });

        dropzone.addEventListener("dragleave", () => {
            dropzone.style.borderColor = "#cccccc";
        });

        dropzone.addEventListener("drop", (event) => {
            event.preventDefault();
            dropzone.style.borderColor = "#cccccc";

            const files = event.dataTransfer.files;

            fileInput.files = files;

            fileInput.dispatchEvent(new Event("change"));
        });
    });
        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.querySelector('#popup-success');
            if (popup) {
                popup.style.display = 'flex';
                setTimeout(() => {
                    popup.style.display = 'none';
                }, 6000);
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const popup = document.querySelector('#popup-error');
            if (popup) {
                popup.style.display = 'flex';
                setTimeout(() => {
                    popup.style.display = 'none';
                }, 6000);
            }
        });
        document.addEventListener('DOMContentLoaded', function () {
            const selectInput = document.getElementById('select-input');
            const optionsDiv = document.getElementById('options');
            const checkboxes = document.querySelectorAll('.option-checkbox');

            selectInput.addEventListener('click', () => {
                optionsDiv.style.display = optionsDiv.style.display === 'block' ? 'none' : 'block';
            });

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    const selectedOptions = Array.from(checkboxes)
                        .filter(i => i.checked)
                        .map(i => i.parentElement.textContent.trim());
                    selectInput.value = selectedOptions.join(', ') || 'Pick a user...';
                });
            });

            document.addEventListener('click', (event) => {
                if (!selectInput.contains(event.target) && !optionsDiv.contains(event.target)) {
                    optionsDiv.style.display = 'none';
                }
            });
        });

</script>
@endsection