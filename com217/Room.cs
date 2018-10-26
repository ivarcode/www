using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Room {

    public Room n, s, e, w;
    public string type;
    public int x, y;
    // KEY
    /*
        0 - empty
        1 - block
        2 - crate
        3 - ITEM
        4 - MOB
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

    public Room(int cx, int cy, string t) {
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

        switch (type)
        {
            case "SOURCE":
                // source room
                // currently we wish to leave this empty and do nothing so the starting
                // room that the player falls into is blank
                break;
            case "STANDARD":
                // standard floor room
                standard_room_gen();
                break;
            case "TREASURE":
                // treasure room
                treasure_room_gen();
                break;
            case "BOSS":
                // boss room
                boss_room_gen();
                break;
            default:
                Debug.Log("default case called in generate()");
                break;
        }

         
    }

    // treasure_room_gen is the function responsible for generating the data contained
    // within a treasure room
    public void treasure_room_gen()
    {
        // spawn treasure item
        data[4, 8] = 3;
    }

    // standard_room_gen is the function responsible for generating the data contained
    // within a standard room
    public void standard_room_gen()
    {
        data[3, 3] = 4;
        data[4, 4] = 4;

        data[6, 2] = 2;
    }

    // boss_room_gen is the function responsible for generating the data contained
    // within a boss room
    public void boss_room_gen()
    {
        
    }

}