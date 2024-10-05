@extends('app')

@section('title', 'Home Page')

@section('content')
<div class="todo">
    <div class="todoHeader">
        <div class="topHeader">
            <h2>Email</h2> | <span>Home</span>
        </div>
        <div class="headerToQuesionRight">
            <button type="button" class="create" onclick="CreateCategoryForm()"><i class="fa-solid fa-plus"></i> Danh muc</button>
            <button type="button" class="change"><i class="fa-solid fa-cash-register"></i> Thay đổi</button>
        </div>
    </div>
    <div class="tab-buttons">
        <button class="tab-btn" onclick="openTabVocadulary(event, 'tab1')">{{ __('messages.Vocabulary') }}</button>
        <button class="tab-btn" onclick="openTabVocadulary(event, 'tab2')">{{ __('messages.Structure') }}</button>
        <button class="tab-btn" onclick="openTabVocadulary(event, 'tab3')">Tab 3</button>
    </div>
        <div id="tab1" class="tab-content">
            <div class="add-col-100">
                <div class="projectTodoNotify">
                    <div class="projectTodoNotifyHeader">
                        <div class="bodyHeader">
                            <form action="">
                                <div class="Users--right--btns">
                                    <select name="date" id="date" class="select-dropdown doctor--filter">
                                        <option>Date of Month</option>
                                        <option value="free">Admin</option>
                                        <option value="scheduled">Users</option>
                                    </select>
                                </div>
                            </form>
                            <form action="">
                                <div class="Users--right--btns">
                                    <select name="date" id="date" class="select-dropdown doctor--filter">
                                        <option>Category</option>
                                        <option value="free">Admin</option>
                                        <option value="scheduled">Users</option>
                                    </select>
                                </div>
                            </form>
                            <form action="" class="formSearch">
                                <div class="formInputSearch">
                                    <input type="text" value="">
                                </div>
                                <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <button class="btnCategory" onclick="CreateVocabularyForm()">{{ __('messages.Add New') }}</button>
                    </div>
                    <div class="body-category-todo mt-10">
                        <div class="recent--patient">
                            <div class="tables">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>{{ __('messages.Name') }}</th>
                                            <th>{{ __('messages.Meaning of word') }}</th>
                                            <th>{{ __('messages.Romaji') }}</th>
                                            <th>{{ __('messages.Category') }}</th>
                                            <th>{{ __('messages.Create at') }}</th>
                                            <th class="text-center">{{ __('messages.Settings') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($vocabulary as $voca)
                                        <tr>
                                            <td>{{$voca->name}}</td>
                                            <td>{{$voca->meaning_of_word}}</td>
                                            <td>{{$voca->romaji}}</td>
                                            <td>{{ $voca->category ? $voca->category->name : 'Không có danh mục' }}</td>
                                            <td>{{ $voca->created_at->format('Y-m-d') }}</td>
                                            <td class="text-center">
                                                <a href="#" onclick="showEditVocabularyPopup({{ $voca->id }})">
                                                    <i class="fa-regular fa-pen-to-square edit"></i>
                                                </a>
                                                <a href="#" onclick="showDeletePopup({{ $voca->id }})">
                                                    <i class="fa-solid fa-trash delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center link-margin">
                                    {{ $vocabulary->links('') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab2" class="tab-content">
            <div class="add-col-100">
                <div class="projectTodoNotify">
                    <div class="projectTodoNotifyHeader">
                        <div class="bodyHeader">
                            <form action="">
                                <div class="Users--right--btns">
                                    <select name="date" id="date" class="select-dropdown doctor--filter">
                                        <option>Date of Month</option>
                                        <option value="free">Admin</option>
                                        <option value="scheduled">Users</option>
                                    </select>
                                </div>
                            </form>
                            <form action="">
                                <div class="Users--right--btns">
                                    <select name="date" id="date" class="select-dropdown doctor--filter">
                                        <option>Category</option>
                                        <option value="free">Admin</option>
                                        <option value="scheduled">Users</option>
                                    </select>
                                </div>
                            </form>
                            <form action="" class="formSearch">
                                <div class="formInputSearch">
                                    <input type="text" value="">
                                </div>
                                <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <button class="btnCategory" onclick="CreateStructureForm()">{{ __('messages.Add New') }}</button>
                    </div>
                    <div class="body-category-todo mt-10">
                        <div class="recent--patient">
                            <div class="tables">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>{{ __('messages.Structure') }}</th>
                                            <th>{{ __('messages.Structural meaning') }}</th>
                                            <th>{{ __('messages.Example') }}</th>
                                            <th class="text-center">Create at</th>
                                            <th>{{ __('messages.Category') }}</th>
                                            <th class="text-center">{{ __('messages.Settings') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($structures as $structure)
                                        <tr>
                                            <td>
                                                <div class="text-truncate">
                                                    {{$structure->structure}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-truncate">
                                                    「{{$structure->meaning_of_structure}}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-truncate">
                                                    「{{$structure->example}}
                                                </div>
                                            </td>
                                            <td>{{ $structure->created_at->format('Y-m-d') }}</td>
                                            <td>{{ $structure->category ? $structure->category->name : 'Không có danh mục' }}</td>
                                            <td class="text-center">
                                                <a href="#" onclick="showEditStructure({{ $structure->id }})">
                                                    <i class="fa-regular fa-pen-to-square edit"></i>
                                                </a>
                                                <a href="#" onclick="showDeleteStructure({{ $structure->id }})">
                                                    <i class="fa-solid fa-trash delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center link-margin">
                                    {{ $structures->links('') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tab3" class="tab-content">
            <div class="add-col-100">
                <div class="projectTodoNotify">
                    <div class="projectTodoNotifyHeader">
                        <form action="" class="formSearch">
                            <div class="formInputSearch">
                                <input type="text" value="">
                            </div>
                            <button class="add-search"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <button class="btnCategory" onclick="CreateCategoryForm()">{{ __('messages.Add New') }}</button>
                    </div>
                    <div class="body-category-todo mt-10">
                        <div class="recent--patient">
                            <div class="tables">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>{{ __('messages.Name') }}</th>
                                            <th>{{ __('messages.Meaning of word') }}</th>
                                            <th class="text-center">{{ __('messages.Status') }}</th>
                                            <th class="text-center">{{ __('messages.Settings') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>今日は</td>
                                            <td> Chào buổi trưa</td>
                                            <td class="text-center "> 
                                                <input type="checkbox" name="" id="status" value="1">
                                            <td class="text-center">
                                                <a href="#" onclick="showEditPopup()">
                                                    <i class="fa-regular fa-pen-to-square edit"></i>
                                                </a>
                                                <a href="#" onclick="showDeletePopup()">
                                                    <i class="fa-solid fa-trash delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="ModelCreateCategory">
    <form method="POST" action="{{ route('category.store') }}">
    @csrf
        <h2>{{ __('messages.Add New') }}</h5>
        @if (Auth::check())
            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}"/>
        @endif
        <input type="hidden" id="key" name="key" value="5"/>
        <div class="form-select-category mt-10">
            <label for="status">{{ __('messages.Status') }}</label>
            <select name="status" id="status">
                <option value="1">{{ __('messages.Show') }}</option>
                <option value="0">{{ __('messages.Hide') }}</option>
            </select>
        </div>
        <div class="form-input-category">
            <label for="name">{{ __('messages.Name') }}</label>
            <input type="text" class="input-name" id="name" name="name">
        </div>
        <div class="form-btn">
            <button>{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeCreateCategoryFormPopup()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="modelCreateVocabulary">
    <form method="POST" action="{{ route('vocabularies.store') }}">
    @csrf
        <h2>{{ __('messages.Add New') }}</h5>
        <input type="hidden" id="language_id" name="language_id" value="3"/>
        <div class="form-select-category mt-10">
            <label for="category_id">{{ __('messages.Category') }}</label>
            <select name="category_id" id="category_id">
                @foreach($category as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-input-category mt-10">
            <label for="name">{{ __('messages.Vocabulary') }}</label>
            <input type="text" class="input-name" id="name" name="name">
        </div>
        <div class="form-input-category mt-10">
            <label for="name">Nghĩa của từ</label>
            <input type="text" class="input-name" id="meaning_of_word" name="meaning_of_word">
        </div>
        <div class="form-input-category mt-10">
            <label for="name">Romaji</label>
            <input type="text" class="input-name" id="romaji" name="romaji">
        </div>
        <div class="form-btn">
            <button>{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeFormVocabularyPopup()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="modelEditVocabulary">
    <form method="POST" id="edit-vocabulary-form">
        @csrf
        @method('PUT')
        <h2>{{ __('messages.Update') }}</h5>
        <input type="hidden" id="voca_id" value="id"/>
        <input type="hidden" id="language_id" name="language_id" value="3"/>
        <div class="form-select-category mt-10">
            <label for="category_id">{{ __('messages.Category') }}</label>
            <select name="category_id" id="voca_category_id">
                @foreach($category as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-input-category mt-10">
            <label for="name">{{ __('messages.Vocabulary') }}</label>
            <input type="text" class="input_name" id="voca_name" name="name">
        </div>
        <div class="form-input-category mt-10">
            <label for="name">Nghĩa của từ</label>
            <input type="text" class="input-name" id="voca_meaning_of_word" name="meaning_of_word">
        </div>
        <div class="form-input-category mt-10">
            <label for="name">Romaji</label>
            <input type="text" class="input-name" id="voca_romaji" name="romaji">
        </div>
        <div class="form-btn">
            <button>{{ __('messages.Update') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeEditVocabularyPopup()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="modelDelete" id="DeleteVocabulary">
    <form method="POST" id="delete-vocabulary-form">
        @csrf
        @method('DELETE')
        <h3>{{ __('messages.Are you sure you want to delete?') }}</h3>
        <div class="form-btn-delete">
            <button>{{ __('messages.Delete') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeDeleteVocabularyPopup()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="modelCreateFrom" id="Structure">
    <form method="POST" action="{{ route('structures.store') }}">
    @csrf
        <h2>{{ __('messages.Add New') }}</h5>
        <input type="hidden" name="language_id" value="3"/>
        <div class="form-select-category mt-10">
            <label for="category_id">{{ __('messages.Category') }}</label>
            <select name="category_id">
                @foreach($category as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-input-category mt-10">
            <label for="name">{{ __('messages.Structure') }}</label>
            <input type="text" class="input-name" name="structure">
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Structural meaning') }}</label>
            <textarea class="textarea" name="meaning_of_structure"></textarea> 
        </div>
        <div class="form-input-category mt-10">
            <label for="name">{{ __('messages.Example') }}</label>
            <input type="text" class="input-name" name="example">
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Meaning of Example') }}</label>
            <textarea class="textarea" name="meaning_of_example"></textarea> 
        </div>  
        <div class="form-btn">
            <button>{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeFormStructurePopup()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="modelEditForm" id="editStructure">
    <form method="POST" id="edit-structure">
        @csrf
        @method('PUT')
        <h2>{{ __('messages.Update') }}</h5>
        <input type="hidden" id="structure_id" value="id"/>
        <input type="hidden" id="language_id" name="language_id" value="3"/>
        <div class="form-select-category mt-10">
            <label for="category_id">{{ __('messages.Category') }}</label>
            <select name="category_id" id="category_id">
                @foreach($category as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-input-category mt-10">
            <label for="name">{{ __('messages.Structure') }}</label>
            <input type="text" class="input-name" id="structure" name="structure">
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Structural meaning') }}</label>
            <textarea class="textarea" id="meaning_of_structure" name="meaning_of_structure"></textarea> 
        </div>
        <div class="form-input-category mt-10">
            <label for="name">{{ __('messages.Example') }}</label>
            <input type="text" class="input-name" id="example" name="example">
        </div>
        <div class="form-textarea-category">
            <label for="description">{{ __('messages.Meaning of Example') }}</label>
            <textarea class="textarea" id="meaning_of_example" name="meaning_of_example"></textarea> 
        </div>  
        <div class="form-btn">
            <button>{{ __('messages.Add') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeEditStructure()">
            <p>X</p>
        </div>
    </form>
</div>

<div class="modelDelete" id="DeleteStructure">
    <form method="POST" id="delete-Structure">
        @csrf
        @method('DELETE')
        <h3>{{ __('messages.Are you sure you want to delete?') }}</h3>
        <div class="form-btn-delete">
            <button>{{ __('messages.Delete') }}</button>
        </div>
        <div class="BtnCloseCategoryTask" onclick="closeDeleteStructure()">
            <p>X</p>
        </div>
    </form>
</div>

<script>
    function CreateStructureForm(){
        const modelCreateStructure = document.getElementById('Structure')
        if (modelCreateStructure.style.display === 'none' || modelCreateStructure.style.display === '') {
            modelCreateStructure.style.display = 'block'; 
        } else {
            modelCreateStructure.style.display = 'none';
        }
    }

    function closeFormStructurePopup() {
        const modelCreateStructure = document.document.getElementById('Structure')
        if (modelCreateStructure.style.display === 'none' || modelCreateStructure.style.display === '') {
            modelCreateStructure.style.display = 'block'; 
        } else {
            modelCreateStructure.style.display = 'none';
        }
    }

    function showEditStructure(StructureId) {
        const modelEditStructure = document.getElementById('editStructure');
        modelEditStructure.style.display = 'block';

        fetch(`/structures/${StructureId}`)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            document.getElementById('structure_id').value = StructureId;
            document.getElementById('language_id').value = data.language_id;
            document.getElementById('category_id').value = data.category_id;
            document.getElementById('structure').value = data.structure;
            document.getElementById('meaning_of_structure').value = data.meaning_of_structure;
            document.getElementById('example').value = data.example;
            document.getElementById('meaning_of_example').value = data.meaning_of_example;
        })
    }

    document.getElementById('edit-structure').onsubmit = function(event) {
        event.preventDefault();
        const structureIdElement = document.getElementById('structure_id');
        if (!structureIdElement) {
            console.error('Element with ID structure_id not found');
            return;
        }
        const structureId = structureIdElement.value;
        console.log('structure ID:', structureId);
        if (!structureId) {
            console.error('structure ID is empty');
            return;
        }
        this.action = `/structures/${structureId}`;
        console.log('Form action set to:', this.action);
        try {
            this.submit();
        } catch (error) {
            console.error('Error during form submission:', error);
        }
    };

    function closeEditStructure() {
        const modelEditStructure = document.getElementById('editStructure');
        if (modelEditStructure.style.display === 'none' || modelEditStructure.style.display === '') {
            modelEditStructure.style.display = 'block'; 
        } else {
            modelEditStructure.style.display = 'none';
        }
    }

    // Ẩn hiện popup form delete todo
    function showDeleteStructure(StructureId) {
        if (!StructureId) {
            console.error('Structure ID is not provided or is invalid');
            return;
        }
        const deleteStructure = document.getElementById('DeleteStructure');
        if (!deleteStructure) {
            console.error('Delete Structure element not found');
            return;
        }

        deleteStructure.style.display = 'block';
        console.log('Delete Structure displayed');

        const deleteFormStructure = document.getElementById('delete-Structure');
        if (!deleteFormStructure) {
            console.error('Delete Structure form not found');
            return;
        }

        deleteFormStructure.action = `/structures/${StructureId}`;
        console.log('Delete form action set to:', deleteFormStructure.action);
    }

    // Ẩn hiện popup form delete todo
    function closeDeleteStructure() {
        const deleteStructure = document.getElementById('DeleteStructure');
        if (deleteStructure.style.display === 'none' || deleteStructure.style.display === '') {
            deleteStructure.style.display = 'block';
        } else {
            deleteStructure.style.display = 'none';
        }
    }


    

    function CreateVocabularyForm(){
        const modelCreateVocabulary = document.querySelector('.modelCreateVocabulary');
        if (modelCreateVocabulary.style.display === 'none' || modelCreateVocabulary.style.display === '') {
            modelCreateVocabulary.style.display = 'block'; 
        } else {
            modelCreateVocabulary.style.display = 'none';
        }
    }

    function closeFormVocabularyPopup() {
        const modelCreateVocabulary = document.querySelector('.modelCreateVocabulary');
        if (modelCreateVocabulary.style.display === 'none' || modelCreateVocabulary.style.display === '') {
            modelCreateVocabulary.style.display = 'block'; 
        } else {
            modelCreateVocabulary.style.display = 'none';
        }
    }


    function showEditVocabularyPopup(VocabularyId) {
        const modelEditVocabulary = document.querySelectorAll(".modelEditVocabulary");
        const isVisible = modelEditVocabulary[0].style.display !== 'none';

        modelEditVocabulary.forEach(task => {
            task.style.display = isVisible ? 'none' : 'block';
        });
        fetch(`/vocabularies/${VocabularyId}`)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            if (document.getElementById('voca_id')) {
                document.getElementById('voca_id').value = VocabularyId;
            } else {
                console.error('Element with ID voca_id not found');
            }
            if (document.getElementById('language_id')) {
                document.getElementById('language_id').value = data.language_id;
            } else {
                console.error('Element with ID language_id not found');
            }
            if (document.getElementById('voca_category_id')) {
                document.getElementById('voca_category_id').value = data.category_id;
            }
            if (document.getElementById('voca_name')) {
                document.getElementById('voca_name').value = data.name;
            }
            if (document.getElementById('voca_meaning_of_word')) {
                document.getElementById('voca_meaning_of_word').value = data.meaning_of_word;
            }
            if (document.getElementById('voca_romaji')) {
                document.getElementById('voca_romaji').value = data.romaji;
            }
        })
    }

    // Chức năng cập nhật thông tin qua API
    document.getElementById('edit-vocabulary-form').onsubmit = function(event) {
        event.preventDefault();
        const vocabularyIdElement = document.getElementById('voca_id');
        if (!vocabularyIdElement) {
            console.error('Element with ID voca_id not found');
            return;
        }
        const VocabularyId = vocabularyIdElement.value;
        console.log('Vocabulary ID:', VocabularyId);
        if (!VocabularyId) {
            console.error('Vocabulary ID is empty');
            return;
        }
        this.action = `/vocabularies/${VocabularyId}`;
        console.log('Form action set to:', this.action);
        try {
            this.submit();
        } catch (error) {
            console.error('Error during form submission:', error);
        }
    };

    // Ẩn hiện popup form delete todo
    function showDeletePopup(VocabularyId) {
        if (!VocabularyId) {
            console.error('Vocabulary ID is not provided or is invalid');
            return;
        }
        const deletePopup = document.getElementById('DeleteVocabulary');
        if (!deletePopup) {
            console.error('Delete popup element not found');
            return;
        }

        deletePopup.style.display = 'block';
        console.log('Delete popup displayed');

        const deleteFormTodo = document.getElementById('delete-vocabulary-form');
        if (!deleteFormTodo) {
            console.error('Delete vocabulary form not found');
            return;
        }

        deleteFormTodo.action = `/vocabularies/${VocabularyId}`;
        console.log('Delete form action set to:', deleteFormTodo.action);
    }

    // Ẩn hiện popup form delete todo
    function closeDeleteVocabularyPopup() {
        const deletePopupDelete = document.getElementById('DeleteVocabulary');
        if (deletePopupDelete.style.display === 'none' || deletePopupDelete.style.display === '') {
            deletePopupDelete.style.display = 'block';
        } else {
            deletePopupDelete.style.display = 'none';
        }
    }


    function closeEditVocabularyPopup() {
        const modelEditVocabulary = document.querySelector('.modelEditVocabulary');
        if (modelEditVocabulary.style.display === 'none' || modelEditVocabulary.style.display === '') {
            modelEditVocabulary.style.display = 'block'; 
        } else {
            modelEditVocabulary.style.display = 'none';
        }
    }

    function CreateCategoryForm() {
        const modelCreateTask = document.querySelector('.ModelCreateCategory');
        if (modelCreateTask.style.display === 'none' || modelCreateTask.style.display === '') {
            modelCreateTask.style.display = 'block'; 
        } else {
            modelCreateTask.style.display = 'none';
        }
    }


    function closeCreateCategoryFormPopup() {
        const modelCreateTask = document.querySelector('.ModelCreateCategory');
        if (modelCreateTask.style.display === 'none' || modelCreateTask.style.display === '') {
            modelCreateTask.style.display = 'block'; 
        } else {
            modelCreateTask.style.display = 'none';
        }
    }

    function openTabVocadulary(event, tabId) {
        var tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach(function(tabContent) {
            tabContent.classList.remove('active');
        });
        var tabButtons = document.querySelectorAll('.tab-btn');
        tabButtons.forEach(function(btn) {
            btn.classList.remove('active');
        });

        document.getElementById(tabId).classList.add('active');
        event.currentTarget.classList.add('active');
        localStorage.setItem('activeTab', tabId);
    }

    window.onload = function() {
        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            document.getElementById(activeTab).classList.add('active');
            document.querySelector(`button[onclick="openTabVocadulary(event, '${activeTab}')"]`).classList.add('active');
        } else {
            document.getElementById('tab1').classList.add('active');
            document.querySelector(`button[onclick="openTabVocadulary(event, 'tab1')"]`).classList.add('active');
        }
    };
</script>

@endsection