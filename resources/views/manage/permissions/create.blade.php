@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Create New User</h1>
            </div>
        </div>
        <hr>
        <div class="columns">
            <div class="column">
                <form action="{{ route('permissions.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="block">
                        <b-radio v-model="permissionType" name="permission_type" native-value="basic">Basic Permission</b-radio>
                        <b-radio v-model="permissionType" name="permission_type" native-value="crud">CRUD Permission</b-radio>
                    </div>
                    <div class="basic-permission-form" v-if="permissionType == 'basic'">
                        <div class="field">
                            <label for="display_name" class="label">Name (Display Name)</label>
                            <p class="control">
                                <input type="text" class="input" name="display_name" id="display_name">
                            </p>
                        </div>
                        <div class="field">
                            <label for="name" class="label">Slug</label>
                            <p class="control">
                                <input type="text" class="input" name="name" id="name">
                            </p>
                        </div>
                        <div class="field">
                            <label for="description" class="label">Description</label>
                            <p class="control">
                                <input type="text" class="input" name="description" id="description">
                            </p>
                        </div>
                    </div>
                    <div class="crud-permission-form" v-if="permissionType == 'crud'">
                        <div class="field">
                            <label for="resource" class="label">Resource</label>
                            <p class="control">
                                <input type="text" class="input" name="resource" id="resource" v-model="resource" placeholder="Name of the resource">
                            </p>
                        </div>
                        <div class="columns">
                            <div class="column is-one-quarter">
                                <div class="block">
                                    <div class="field">
                                        <b-checkbox v-model="crudSelected" native-value="create">Create</b-checkbox>
                                    </div>
                                    <div class="field">
                                        <b-checkbox v-model="crudSelected" native-value="read">Read</b-checkbox>
                                    </div>
                                    <div class="field">
                                        <b-checkbox v-model="crudSelected" native-value="update">Update</b-checkbox>
                                    </div>
                                    <div class="field">
                                        <b-checkbox v-model="crudSelected" native-value="delete">Delete</b-checkbox>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="crud_selected" :value="crudSelected">
                            <div class="column">
                                <table class="table" v-if="resource.length >= 3">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="item in crudSelected">
                                        <td v-text="crudName(item)"></td>
                                        <td v-text="crudSlug(item)"></td>
                                        <td v-text="crudDescription(item)"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="columns" v-if=" ! allowCrudPermission">
                        <div class="column">
                            <p class="notification is-warning">Select at least one option</p>
                        </div>
                    </div>
                    <button class="button is-primary m-t-10" :disabled=" ! allowCrudPermission">Create Permission</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',

            data: {
                permissionType: 'basic',
                resource: '',
                crudSelected: ['create', 'read', 'update', 'delete'],
            },

            computed: {
                allowCrudPermission: function () {
                    return (this.permissionType == 'crud' && this.crudSelected.length > 0) || this.permissionType == 'basic';
                }
            },

            methods: {
                crudName: function (item) {
                    return item.substr(0,1).toUpperCase() + item.substr(1) + " " + this.resource.substr(0,1).toUpperCase() + this.resource.substr(1);
                },

                crudSlug: function(item) {
                    return item.toLowerCase() + "-" + this.resource.toLowerCase();
                },

                crudDescription: function(item) {
                    return "Allow User to " + item.toUpperCase() + ' ' + this.resource.substr(0,1).toUpperCase() + this.resource.substr(1);
                }
            }
        })
    </script>
@stop