const router = new VueRouter({
    routes: [
        // les parties dynamiques commencent par un deux-points
        { path: '/item/:name', component: ItemDetail }
    ]
})