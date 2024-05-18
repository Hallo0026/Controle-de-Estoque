<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">

                    <div class="card-header">{{ title }}</div>


                    <div class="card-body">
                        <slot name="body"></slot>
                    </div>


                    <div class="card-footer">
                        <slot name="footer"></slot>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title']
    }
</script>
