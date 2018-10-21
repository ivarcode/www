using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Game : MonoBehaviour {

    // Game objects
    Room r = new Room(0, 0, null);

	public Mob waterMob;
	public Mob airMob;
	public Mob earthMob;
	public Mob iceMob;
	public Mob fireMob;

	public PlayerController player;
	public Wall waterObstacle;

	// Use this for initialization
	void Start () {
		Mob newDummy;
		Wall newObstacle;
        Vector3 position;

		// anything spawned with an x coordinate between 8 and -8 will be in the field
		// anything spawned with a y coordinate between 4 and -4 will be in the field. 

        for (int i = 0; i < 17; i++) {
            for (int j = 0; j < 9; j++) {
                if (r.data[j,i] == 1) {
                    position = new Vector3(i-8,-j+4,0);
                    newObstacle = Instantiate(waterObstacle, position, Quaternion.identity);
                }
            }
        }

        Debug.Log("ayyoo");

		//creates 3 mobs
		// Vector3 position = new Vector3 (0,-4,0);
		// newDummy = Instantiate(waterMob, position, Quaternion.identity);

		// position = new Vector3 (3,0,0);
		// newDummy = Instantiate(waterMob, position,Quaternion.identity);

		// position = new Vector3 (7,3,0);
		// newDummy = Instantiate(waterMob, position, Quaternion.identity);


		// //creates 3 blocks
		// position = new Vector3 (-1, 2, 0);
		// newObstacle = Instantiate(waterObstacle, position, Quaternion.identity);

		// position = new Vector3 (-1, -2, 0);
		// newObstacle = Instantiate(waterObstacle, position, Quaternion.identity);

		// position = new Vector3 (4, -1, 0);
		// newObstacle = Instantiate(waterObstacle, position, Quaternion.identity);
	}

	// Update is called once per frame
	void Update () {

	}
}