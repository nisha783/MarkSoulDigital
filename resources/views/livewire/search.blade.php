<div>
    <div class="card card-body shadow-lg">
        <div class="row">
            <div class="col-6 col-md-3 mb-3 d-flex justify-content-center align-items-center">
                <a href="{{ route('user.dashboard.index') }}"
                    class="btn btn-large d-flex justify-content-center align-items-center gap-2 text-white" style="background-color: #1f6f78;">
                    <i class="ph-house-line fs-3"></i>
                    Dashboard
                </a>
            </div>
            <div class="col-6 col-md-3 mb-3 d-flex justify-content-center align-items-center">
                <a href="{{ route('user.tree.show', ['tree' => auth()->user()->id]) }}"
                    class="btn btn-large d-flex justify-content-center align-items-center gap-2 text-white" style="background-color: #1f6f78;">
                    <i class="ph-tree-structure fs-3"></i>
                    My Tree
                </a>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" wire:model='username' wire:keydown.enter="searchUser" id="leftRefer"
                            class="form-control">
                        <button class="btn btn-large text-white" wire:click="searchUser" type="button"
                            id="button-addon2" style="background-color: #1f6f78;">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
