<template>
        <div class="container mt-5">
                <h3>Add Shop</h3>
                    <!-- Form for adding a shop -->
            <form action="/admin/shops/shops" method="post"  enctype="multipart/form-data">
                <input type="hidden" name="_token" v-model="csrfToken" />
                <div class="mb-3">
                    <label for="shopName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="shopName" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="shopLocation" class="form-label">Address</label>
                    <input type="text" class="form-control" id="location" name="shopLocation" required>
                </div>
                <div class="mb-3">
                    <label for="shopPhone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="shopPhone" name="phone"  placeholder="phone" required>
                </div>
                <div class="mb-3">
                    <label for="shopPhone" class="form-label">website</label>
                    <input type="tel" class="form-control" id="website" name="website"  placeholder="Website" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Shop</button>
            </form>
        </div>
</template>
<script>

import {
    csrf
} from '@/config.js'
export default {
    props: {
       
    },
    data() {
        return {
            csrfToken: csrf,
        };
    },
    methods:{

    },
    created(){

    },
}
</script>