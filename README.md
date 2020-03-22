# TNTRun
TNTRun for [PMMP](https://github.com/pmmp/PocketMine-MP) using [gameapi](https://github.com/thebigsmileXD/gameapi)
## Download
Grab a phar from [Poggit](https://poggit.pmmp.io/ci/thebigsmileXD/TNTRun)
## Gameplay
- Join a game
- Run!
- Any block below the player will be removed 
## Setup
**Please use the plugin on a seperate server to your main server (lobby etc)** This is because the plugin modifies gameplay alot. You can use the `/transferserver` command to send players to the server.

Setup is really easy. The world can be automatically generated. To replace the map with another map, go to `/plugin_data/TNTRun/worlds` and replace your 'tntrun' data with your worlds data (you should keep the level.dat though)

There is a setup command, that makes your life substantially easier

`/tntrun` opens an UI with settings and options to create new worlds/arenas

The generated world is a void world, i suggest to use a world editor like [MagicWE2](https://github.com/thebigsmileXD/MagicWE2) to place blocks.

Remember to use `/setworldspawn` in your map!

When you are done with building and setting the world spawn in a map, use `/tntrun endsetup`! If you don't, the world won't get saved!

Joining is done by using signs, but you can add any event for joining that you'd like - in JoinEventListener.php

Sign setup:
```
L1: [TNTRun]
L2: mapname
L3: 
L4: 
```
Then, click on it, and you are set.

Only TNT blocks will work.

Players will not be damaged and can not build in the world, but there are setting files if you really need to change anything
### Setup rewards
Use [gamerewards](https://github.com/thebigsmileXD/gamerewards) to give the winner rewards and execute commands.

There is also a GameWinEvent getting called containing the winning players
## Commands
| Command | Description | Permission |
| --- | --- | --- |
| `/tntrun`,`/tntrun setup` | `Main command for setup` | `tntrun.command`,`tntrun.command.setup`, |
| `/tntrun leave` | `Used to leave a game` | `tntrun.command.leave` |
| `/tntrun forcestart` | `Force the start of an arena you are in` | `tntrun.command.forcestart` |
| `/tntrun stop` | `Stops the current game` | `tntrun.command.stop` |
| `/tntrun endsetup` | `Stops the setup and saves the world` | `tntrun.command.endsetup` |
| `/tntrun info` | `Information about the plugin` | `tntrun.command.information` |
| `/tntrun status` | `Status, TPS, Player count/percentage of TNTRun arenas` | `tntrun.command.status` |
## From source
**You need to set up DEVirion and install the [gameapi](https://github.com/thebigsmileXD/gameapi) virion properly if you are running from source!**
(turn over to poggit for a compiled phar)
**Please search up how this is done yourself!**

## Disclaimer
You can modify the code by your needs and wills (see [LICENSE](https://github.com/thebigsmileXD/TNTRun/blob/master/LICENSE)).
