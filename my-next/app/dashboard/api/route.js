export async function POST() {
    let data = [
        {
            'npm' : '00010001',
            'name' : 'Nuel'
        },
        {
            'npm' : '00020002',
            'name' : 'Valentino'
        }
    ];

    return Response.json(data);
}