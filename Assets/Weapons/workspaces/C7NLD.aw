BaseSource {
 AnimSetTemplate "{D3FC781249E4D1D5}Assets/Weapons/Rifles/workspaces/m16.ast"
 AnimSetInstances {
  "{D845F124C0D6E7A1}Assets/Weapons/workspaces/C7NLD_player.asi"
  "{231B601558D7834D}Assets/Weapons/workspaces/C7NLD_weapon.asi"
  "{3973A6EEF0F00E6B}Assets/Weapons/workspaces/C7NLD_grippod_player.asi"
 }
 AnimGraph "{C10E1E127E210526}Assets/Weapons/Rifles/workspaces/m16.agr"
 PreviewModels {
  AnimSrcWorkspacePreviewModel "{65CA8A9DC5F168BC}" {
   Model "{790CB9C809DE64B8}Assets/Characters/Animation/AnimTestChar_US_01.xob"
  }
  AnimSrcWorkspacePreviewModel "{65CA8A9C53255413}" {
   Model "{0B2EE36913A27ABF}Assets/Weapons/C7NLD/C7NLD.xob"
  }
 }
 ChildPreviewModels {
  AnimSrcWorkspaceChildPreviewModel "{65CA8A9C37E12787}" {
   Enabled 1
   Model "{DACC5795857F8288}Assets/Weapons/Magazines/pmag/Magazine_30rnd_PMAG.xob"
   Bone "slot_magazine"
   Parent "{65CA8A9C53255413}"
   ChildBone "snap_weapon"
  }
  AnimSrcWorkspaceChildPreviewModel "{65CA8A9DDD9E2E1A}" {
   Enabled 1
   Model "{0B2EE36913A27ABF}Assets/Weapons/C7NLD/C7NLD.xob"
   Bone "RightHandProp"
   Parent "{65CA8A9DC5F168BC}"
  }
  AnimSrcWorkspaceChildPreviewModel "{65CA8A9DA633766B}" {
   Enabled 1
   Model "{DACC5795857F8288}Assets/Weapons/Magazines/pmag/Magazine_30rnd_PMAG.xob"
   Bone "LeftHandProp"
   Parent "{65CA8A9DC5F168BC}"
  }
 }
 AudioTesting AnimSrcWorkspaceAudioTesting "{59BA83C4E503A055}" {
 }
 AttachmentTesting AnimSrcWorkspaceAttachmentTesting "{51EA7A3AB59A3CB1}" {
 }
 IkTesting AnimSrcWorkspaceIkTesting "{53049245A5066937}" {
 }
}