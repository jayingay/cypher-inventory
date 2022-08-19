<template>
    <form @submit.prevent="submitForm" role="form" method="POST"> 
        <div class="row">
            <show-error></show-error>
            <div class="col-sm-6">
                <div class="card card-primary card-outline">
                <div class="card-body">
                    <h5 class="card-title">Create Product</h5><br><br>
                   
                        <div class="card-body">
                            <div class="form-group">
                                <label for="category">Category&nbsp;<span class="text-danger">*</span></label>
                                <Select2 v-model="form.category_id" :options="categories" :settings="{ placeholder: 'Select Category' }"></Select2>        
                            </div>
                            <div class="form-group">
                                <label for="brand">Brand&nbsp;<span class="text-danger">*</span></label>
                                <Select2 v-model="form.brand_id" :options="brands" :settings="{ placeholder: 'Select Brand' }"></Select2>
                                <!-- <select v-model="form.brands_id" class="form-control">
                                    <option disabled>Select Brand</option>
                                    <option :value="form.brands_id" v-for="item of getBrands" :key="item.id" :settings="{ placeholder: 'Select Brand' }">{{item.brand}}</option>
                                </select>         -->
                            </div>
                            <div class="form-group">
                                <label for="name">Name&nbsp;<span class="text-danger">*</span></label>
                                <input type="text" v-model="form.name" class="form-control" placeholder="Product Name">      
                            </div>
                            <div class="form-group">
                                <label for="image">Image&nbsp;<span class="text-danger">*</span></label>
                                <input @change="selectImage" type="file" class="form-control" placeholder="Product Image">      
                            </div>
                            <div class="form-group">
                                <label for="cost-price">Cost Price(₱)&nbsp;<span class="text-danger">*</span></label>
                                <input type="text" v-model="form.cost_price" class="form-control" placeholder="Product Cost Price">      
                            </div>
                            <div class="form-group">
                                <label for="year">Year&nbsp;<span class="text-danger">*</span></label>
                                <input type="text" v-model="form.year" class="form-control" placeholder="Product Year [Ex:2020]">      
                            </div>
                            <div class="form-group">
                                <label for="description">Description&nbsp;<span class="text-danger">*</span></label>
                                <input type="text" v-model="form.description" class="form-control" placeholder="Product Description [Max:200]">      
                            </div>
                            <div class="form-group">
                                <label for="status">Status&nbsp;<span class="text-danger">*</span></label>
                                <select class="form-control" v-model="form.status">
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                </select>    
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp; Submit</button>
                        </div>            
                    </div>
                </div><!-- /.card -->
            </div>       
            <div class="col-sm-6">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title">Product Size</h5><br><br>

                        <div class="row" v-for="(item, index) in form.items" :key="index" >
                            <div class="col-sm-4">
                                <select class="form-control" v-model="item.size_id">
                                    <option value="">Select Size</option>
                                    <option v-for="(size, index) in sizes" :key="index" :value="size.id">{{size.size}}</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" v-model="item.location" class="form-control" placeholder="Location">
                            </div>
                            <div class="col-sm-3">
                                <input type="number" v-model="item.quantity" class="form-control" placeholder="Quantity" min="0" max="50">
                            </div>
                            <div class="col-sm-2">
                                <button @click="deleteItem(index)" class="mb-1 btn btn-danger"><i class="fa fa-trash"></i></button>
                            </div>
                        </div>

                        <Login @click="addItem" class="btn btn-primary btn-sm mt-3"><i class="fa fa-plus"></i> &nbsp; Add Item</Login>
                    </div>
                </div>   
            </div>
        </div>
    </form>
</template>

<script>
    import Select2 from 'v-select2-component';
    import store from '../../store/index'
    import * as actions from '../../store/action-types'
    import { mapGetters } from 'vuex'
    import ShowError from '../utils/ShowError.vue'

    export default {
        components: {
            Select2,
            ShowError
        },

        data(){
            return {
                form:{
                    category_id: '',
                    brand_id: '',
                    name:'',
                    image:'',
                    cost_price: '',
                    year: '',
                    description: '',
                    status: 1,
                    items:[
                        {
                            size_id: '',
                            location: '',
                            quantity: ''
                        }
                    ]
                }
            }
        },

        computed: {
            ...mapGetters({
                'categories': 'getCategories',
                'brands': 'getBrands',
                'sizes': 'getSizes'
            })
        },

        mounted(){
            //get gategories
            store.dispatch(actions.GET_CATEGORIES)
            //get gategories
            store.dispatch(actions.GET_BRANDS)
            //get sizes
            store.dispatch(actions.GET_SIZES)
        
        },

        methods: {
            selectImage(e){
                this.form.image = e.target.files[0]
            },

            addItem(){
                let item = 
                {
                    size_id: '',
                    location: '',
                    quantity: 0    
                }
                this.form.items.push(item)
            },

            deleteItem(index){
                this.form.items.splice(index, 1)
            },

            submitForm(){
                let data = new FormData();
                data.append('category_id', this.form.category_id)
                data.append('brand_id', this.form.brand_id)
                data.append('name', this.form.name) 
                data.append('image', this.form.image)
                data.append('cost_price', this.form.cost_price)
                data.append('year', this.form.year)
                data.append('description', this.form.description)
                data.append('status', this.form.status)
                data.append('items', JSON.stringify(this.form.items))

                store.dispatch(actions.ADD_PRODUCTS, data)
            }
        }
    }
</script>

