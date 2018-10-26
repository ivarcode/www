using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Game : MonoBehaviour {


    // roomList that holds the list of rooms for easy access to parts of the map
    public List<Room> roomList = new List<Room>();
    // mobList that holds the list of mobs in the room currently active
    public List<Mob> mobList = new List<Mob>();


    // SCORE is a global variable in charge of keeping the game score
    public int SCORE;

    public Mob waterMob;
	public Mob airMob;
	public Mob earthMob;
	public Mob iceMob;
	public Mob fireMob;

    public Wall sideWall;
    public Wall topWall;
    public Wall sideWallDoor;
    public Wall topWallDoor;
    public Door northDoor;
    public Door eastDoor;
    public Door southDoor;
    public Door westDoor;

    public PlayerController player;
	public Wall waterObstacle;
    public Crate Crate;

	// Use this for initialization
	void Start () {
		Mob newDummy;
		Wall newObstacle;
        Wall newWall;
        Door newNorthDoor, newSouthDoor, newEastDoor, newWestDoor;
        Crate newCrate;
        Vector3 position;

        // set score to 0
        SCORE = 0;

        // Game objects
        Room SOURCE_ROOM = new Room(0, 0, "STANDARD");
        Room r = SOURCE_ROOM;

        
        roomList.Add(SOURCE_ROOM);

        // function called to create a branch of rooms
        // createBranch(SOURCE_ROOM, roomList, 5);

        // function called to create a single adjacent room
        Room newRoom = createAdjacentRoom(SOURCE_ROOM, "STANDARD");

        // add item room
        Room newTreasureRoom = createAdjacentRoom(SOURCE_ROOM, "TREASURE");


        // anything spawned with an x coordinate between 8 and -8 will be in the field
        // anything spawned with a y coordinate between 4 and -4 will be in the field. 

        for (int i = 0; i < 17; i++) {
            for (int j = 0; j < 9; j++) {
                if (r.data[j,i] == 1)
                {
                    position = new Vector3(i - 8, -j + 4, 0);
                    newObstacle = Instantiate(waterObstacle, position, Quaternion.identity);
                } else if (r.data[j, i] == 2)
                {
                    position = new Vector3(i - 8, -j + 4, 0);
                    newCrate = Instantiate(Crate, position, Quaternion.identity);
                } else if (r.data[j, i] == 4)
                {
                    position = new Vector3(i - 8, -j + 4, 0);
                    newDummy = Instantiate(waterMob, position, Quaternion.identity);
                    mobList.Add(newDummy);
                }
            }
        }

        Debug.Log("ayyoo");




        

        //positions for when there is a door else there is no door
        //north wall
        if (r.n != null)
        {
            newWall = Instantiate(topWallDoor, new Vector3(-4.7f, 4.9f, 0), Quaternion.identity);
            newWall = Instantiate(topWallDoor, new Vector3(4.7f, 4.9f, 0), Quaternion.identity);
            newNorthDoor = Instantiate(northDoor, new Vector3(0, 4.95f, 0), Quaternion.identity);
        } else
        {
            newWall = Instantiate(topWall, new Vector3(0, 4.75f, 0), Quaternion.identity);
        }
        //south wall
        if (r.s != null)
        {
            newWall = Instantiate(topWallDoor, new Vector3(-4.7f, -4.9f, 0), Quaternion.identity);
            newWall = Instantiate(topWallDoor, new Vector3(4.7f, -4.9f, 0), Quaternion.identity);
            newSouthDoor = Instantiate(southDoor, new Vector3(0, -4.95f, 0), Quaternion.identity);
        } else
        {
            newWall = Instantiate(topWall, new Vector3(0, -4.75f, 0), Quaternion.identity);
        }
        //east wall
        if (r.e != null)
        {
            newWall = Instantiate(sideWallDoor, new Vector3(8.7f, -2.79f, 0), Quaternion.identity);
            newWall = Instantiate(sideWallDoor, new Vector3(8.7f, 2.79f, 0), Quaternion.identity);
            newEastDoor = Instantiate(eastDoor, new Vector3(8.7f, 0, 0), Quaternion.identity);
        } else
        {
            newWall = Instantiate(sideWall, new Vector3(8.7f, 0, 0), Quaternion.identity);
        }
        //west wall
        if (r.w != null)
        {
            newWall = Instantiate(sideWallDoor, new Vector3(-8.7f, -2.79f, 0), Quaternion.identity);
            newWall = Instantiate(sideWallDoor, new Vector3(-8.7f, 2.79f, 0), Quaternion.identity);
            newWestDoor = Instantiate(westDoor, new Vector3(-8.7f, 0, 0), Quaternion.identity);
        } else
        {
            newWall = Instantiate(sideWall, new Vector3(-8.7f, 0, 0), Quaternion.identity);
        }

        
    }



	// Update is called once per frame
	void Update () {
        // check if mobList is empty
        if (mobList.Count == 0)
        {
            Debug.Log("no more mobsta's");
        }
        // decrement score :^)
        SCORE--;
	}




    // createAdjacentRoom function takes in two parameters Room s and string t
    // Room s is the source room to generate a room off of and string t is the room type to generate
    // returns the newly generated room if it succeeds, otherwise on failure returns null
    Room createAdjacentRoom(Room s, string t)
    {
        // get open neighbors
        bool nOpen = s.n == null;
        bool sOpen = s.s == null;
        bool eOpen = s.e == null;
        bool wOpen = s.w == null;
        // calculate num of open neighbors
        int num_of_open_neighbors = 0;
        if (nOpen) { num_of_open_neighbors++; }
        if (sOpen) { num_of_open_neighbors++; }
        if (eOpen) { num_of_open_neighbors++; }
        if (wOpen) { num_of_open_neighbors++; }
        // gen random int (if necessary) and create new room at proper location
        int index = 1;
        if (num_of_open_neighbors == 0)
        {
            Debug.Log("failed to create adjacent room: no open neighbors");
            return null;
        }
        if (num_of_open_neighbors != 1)
        {
            index = Random.Range(1, num_of_open_neighbors + 1);
        }
        index--;
        if (nOpen && index > 0)
        {
            nOpen = false;
            index--;
        }
        if (sOpen && index > 0)
        {
            sOpen = false;
            index--;
        }
        if (eOpen && index > 0)
        {
            eOpen = false;
            index--;
        }
        if (wOpen && index > 0)
        {
            wOpen = false;
            index--;
        }
        // generate room where it belongs
        if (nOpen)
        {
            s.n = new Room(s.x, s.y + 1, t);
            s.n.s = s;
            roomList.Add(s.n);
            return s.n;
        }
        else if (sOpen)
        {
            s.s = new Room(s.x, s.y - 1, t);
            s.s.n = s;
            roomList.Add(s.s);
            return s.s;
        }
        else if (eOpen)
        {
            s.e = new Room(s.x + 1, s.y, t);
            s.e.w = s;
            roomList.Add(s.e);
            return s.e;
        }
        else if (wOpen)
        {
            s.w = new Room(s.x - 1, s.y, t);
            s.w.e = s;
            roomList.Add(s.w);
            return s.w;
        }
        Debug.Log("something went VERY VERY WRONG");
        return null;
    }

    // createBranch function takes in three parameters Room s, List<Room> rL and int b 
    // the function creates a branch of rooms of length b starting at Room s
    void createBranch(Room s, List<Room> rL, int b)
    {
        int branch_length = b;
        int i = 0;
        Room curr = s;
        while (i < branch_length)
        {
            curr = createAdjacentRoom(curr, "STANDARD");

            i++;
        }
    }


}