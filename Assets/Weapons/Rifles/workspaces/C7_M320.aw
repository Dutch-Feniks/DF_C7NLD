BaseSource {
 AnimSetTemplate "{3A7FE9F8C04BE953}Assets/Weapons/Rifles/workspaces/m16_M203.ast"
 AnimSetInstances {
  "{9E52E9F018C63392}Assets/Weapons/Rifles/workspaces/C7_M320_player.asi"
  "{650C78C180C7577E}Assets/Weapons/Rifles/workspaces/C7_M320_weapon.asi"
 }
 AnimGraph "{288D8FF8F78E3DA0}Assets/Weapons/Rifles/workspaces/m16_M203.agr"
 PreviewModels {
  AnimSrcWorkspacePreviewModel "{563EF338E13AB792}" {
   Model "{790CB9C809DE64B8}Assets/Characters/Animation/AnimTestChar_US_01.xob"
   HiddenMaterials {
   }
  }
  AnimSrcWorkspacePreviewModel "{68A49D6DE904EACB}" {
   Model "{E46F61164A01209B}Assets/Weapons/Rifles/m320/m320.xob"
  }
 }
 ChildPreviewModels {
  AnimSrcWorkspaceChildPreviewModel "{68A49D6D0BCB1F5D}" {
   Enabled 1
   Model "{0B2EE36913A27ABF}Assets/Weapons/C7NLD/C7NLD.xob"
   Bone "RightHandProp"
   Parent "{563EF338E13AB792}"
  }
 }
 AudioTesting AnimSrcWorkspaceAudioTesting "{588E92AB3C44FBF0}" {
  AudioProjects {
   AnimSrcWorkspaceAudioProject "{5A8C7AB1C8E59B0F}" {
    ProjectFile "{A6F3D0955462D8FE}Sounds/Weapons/Rifles/M16A2/Weapons_Rifles_M16A2_Handling.acp"
   }
   AnimSrcWorkspaceAudioProject "{5A8C7AB1CB14D7DC}" {
    ProjectFile "{6DECA775666513C9}Sounds/Weapons/Attachments/Underbarrel/M203/Weapons_Attch_Underbarrel_M203_Handling.acp"
   }
   AnimSrcWorkspaceAudioProject "{5A8C7AB11451F88D}" {
    ProjectFile "{67007BA2E4D81B0D}Sounds/Character/Character_Movement_Foley_Additive.acp"
   }
  }
 }
 AttachmentTesting AnimSrcWorkspaceAttachmentTesting "{55CF1287F4F4E633}" {
 }
 IkTesting AnimSrcWorkspaceIkTesting "{55CF1287F4F4E638}" {
 }
}