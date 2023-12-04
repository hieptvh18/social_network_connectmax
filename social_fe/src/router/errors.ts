const errors = [
    {
        'path': "/",

        children:[
            {
                'path':'404',
                'name':'page.404',
                meta:{
                    title:'Page Not Found'
                },
                component: ()=> import("@/pages/errors/NotFound.vue")
            },
        ]
    }
];

export default errors;
