public class Room {

    public Room n, s, e, w;
    public String type;
    public int x, y;
    // KEY
    /*
        0 - empty
        1 - block

     */
    public int[,] data = new int[,]
    {
        {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
        {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
        {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
        {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
        {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
        {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
        {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
        {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
        {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
        {0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
    };

    public Room(int cx, int cy, String t) {
        x = cx;
        y = cy;
        type = t;
        n = null;
        s = null;
        e = null;
        w = null;
        generate();
    }

    public void generate() {
        // will generate some 'stuff' in room based on the
        // room type and neighbor data

        for (int i = 1; i < 8; i += 2)
        {
            for (int j = 1; j < 16; j += 2)
            {
                data[i, j] = 1;
            }
        }




    }

}