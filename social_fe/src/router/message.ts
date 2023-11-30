const message = [
    {
        path:'',
        meta:{
            title:'Message'
        },
        component:()=>import('@/layouts/MainLayout.vue'),
        
        children:[
            {
                name:'page.message',
                path:'/messager',
                component:()=>import('@/pages/message/Message.vue')
            }
        ]
    }
];

export default message;