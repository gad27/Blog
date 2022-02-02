
<div class="row clearfix">
                <div class="col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blog Form</h3>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-chevron-up"></i></a>
                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fa fa-window-maximize"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- @if(Session::has('Category_created'))
                            <div class="alert alert-success" role="alert">
                            {{Session::get('Category_created')}}
                            </div>
                            @endif -->
                            <form method="POST" action="{{ route('createblog')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Blog Tittle <span class="text-danger">*</span></label>
                                        <input class="form-control" required type="text" name="tittle" placeholder="Enter the tittle" id="tittle"> 
                                    </div>
                                    <div class="form-group">
                                        <label>Category <span class="text-danger">*</span></label>
                                        <select name="category_id" class="form-control">  
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}" aria-placeholder="Select Category">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Contents <span class="text-danger">*</span></label>
                                        <input class="form-control" required type="text" name="contents" placeholder="Enter the content" id="tittle">
                                    </div>
                                   
                                    <div class="form-group">
                                        <label>Views <span class="text-danger">*</span></label>
                                        <input class="form-control" required type="text" name="views" placeholder="Write your view here" id="views">
                                    </div>
                                    <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <input class="form-control" required type="text" name="description" placeholder="Write description her" id="description">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right m-t-20">
                                    <button type="submit" class="btn btn-primary">SAVE</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>